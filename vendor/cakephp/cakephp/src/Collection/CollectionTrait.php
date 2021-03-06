<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         3.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\Collection;

use AppendIterator;
use ArrayIterator;
use Cake\Collection\Collection;
use Cake\Collection\Iterator\BufferedIterator;
use Cake\Collection\Iterator\ExtractIterator;
use Cake\Collection\Iterator\FilterIterator;
use Cake\Collection\Iterator\InsertIterator;
use Cake\Collection\Iterator\MapReduce;
use Cake\Collection\Iterator\NestIterator;
use Cake\Collection\Iterator\ReplaceIterator;
use Cake\Collection\Iterator\SortIterator;
use Cake\Collection\Iterator\StoppableIterator;
use Cake\Collection\Iterator\TreeIterator;
use Cake\Collection\Iterator\UnfoldIterator;
use Iterator;
use LimitIterator;
use RecursiveIteratorIterator;

/**
 * Offers a handful of method to manipulate iterators
 */
trait CollectionTrait
{

    use ExtractTrait;

    /**
     * {@inheritDoc}
     *
     */
    public function each(callable $c)
    {
        foreach ($this->_unwrap() as $k => $v) {
            $c($v, $k);
        }
        return $this;
    }

    /**
     * {@inheritDoc}
     *
     * @return \Cake\Collection\Iterator\FilterIterator
     */
    public function filter(callable $c = null)
    {
        if ($c === null) {
            $c = function ($v) {
                return (bool)$v;
            };
        }
        return new FilterIterator($this->_unwrap(), $c);
    }

    /**
     * {@inheritDoc}
     *
     * @return \Cake\Collection\Iterator\FilterIterator
     */
    public function reject(callable $c)
    {
        return new FilterIterator($this->_unwrap(), function ($key, $value, $items) use ($c) {
            return !$c($key, $value, $items);
        });
    }

    /**
     * {@inheritDoc}
     *
     */
    public function every(callable $c)
    {
        foreach ($this->_unwrap() as $key => $value) {
            if (!$c($value, $key)) {
                return false;
            }
        }
        return true;
    }

    /**
     * {@inheritDoc}
     *
     */
    public function some(callable $c)
    {
        foreach ($this->_unwrap() as $key => $value) {
            if ($c($value, $key) === true) {
                return true;
            }
        }
        return false;
    }

    /**
     * {@inheritDoc}
     *
     */
    public function contains($value)
    {
        foreach ($this->_unwrap() as $v) {
            if ($value === $v) {
                return true;
            }
        }
        return false;
    }

    /**
     * {@inheritDoc}
     *
     * @return \Cake\Collection\Iterator\ReplaceIterator
     */
    public function map(callable $c)
    {
        return new ReplaceIterator($this->_unwrap(), $c);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function reduce(callable $c, $zero = null)
    {
        $isFirst = false;
        if (func_num_args() < 2) {
            $isFirst = true;
        }

        $result = $zero;
        foreach ($this->_unwrap() as $k => $value) {
            if ($isFirst) {
                $result = $value;
                $isFirst = false;
                continue;
            }
            $result = $c($result, $value, $k);
        }
        return $result;
    }

    /**
     * {@inheritDoc}
     *
     * @return \Cake\Collection\Iterator\ExtractIterator
     */
    public function extract($matcher)
    {
        return new ExtractIterator($this->_unwrap(), $matcher);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function max($callback, $type = SORT_NUMERIC)
    {
        return (new SortIterator($this->_unwrap(), $callback, SORT_DESC, $type))->first();
    }

    /**
     * {@inheritDoc}
     *
     */
    public function min($callback, $type = SORT_NUMERIC)
    {
        return (new SortIterator($this->_unwrap(), $callback, SORT_ASC, $type))->first();
    }

    /**
     * {@inheritDoc}
     *
     */
    public function sortBy($callback, $dir = SORT_DESC, $type = SORT_NUMERIC)
    {
        return new SortIterator($this->_unwrap(), $callback, $dir, $type);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function groupBy($callback)
    {
        $callback = $this->_propertyExtractor($callback);
        $group = [];
        foreach ($this as $value) {
            $group[$callback($value)][] = $value;
        }
        return new Collection($group);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function indexBy($callback)
    {
        $callback = $this->_propertyExtractor($callback);
        $group = [];
        foreach ($this as $value) {
            $group[$callback($value)] = $value;
        }
        return new Collection($group);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function countBy($callback)
    {
        $callback = $this->_propertyExtractor($callback);

        $mapper = function ($value, $key, $mr) use ($callback) {
            $mr->emitIntermediate($value, $callback($value));
        };

        $reducer = function ($values, $key, $mr) {
            $mr->emit(count($values), $key);
        };
        return new Collection(new MapReduce($this->_unwrap(), $mapper, $reducer));
    }

    /**
     * {@inheritDoc}
     *
     */
    public function sumOf($matcher)
    {
        $callback = $this->_propertyExtractor($matcher);
        $sum = 0;
        foreach ($this as $k => $v) {
            $sum += $callback($v, $k);
        }

        return $sum;
    }

    /**
     * {@inheritDoc}
     *
     */
    public function shuffle()
    {
        $elements = $this->toArray();
        shuffle($elements);
        return new Collection($elements);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function sample($size = 10)
    {
        return new Collection(new LimitIterator($this->shuffle(), 0, $size));
    }

    /**
     * {@inheritDoc}
     *
     */
    public function take($size = 1, $from = 0)
    {
        return new Collection(new LimitIterator($this->_unwrap(), $from, $size));
    }

    /**
     * {@inheritDoc}
     *
     */
    public function match(array $conditions)
    {
        return $this->filter($this->_createMatcherFilter($conditions));
    }

    /**
     * {@inheritDoc}
     *
     */
    public function firstMatch(array $conditions)
    {
        return $this->match($conditions)->first();
    }

    /**
     * {@inheritDoc}
     *
     */
    public function first()
    {
        foreach ($this->take(1) as $result) {
            return $result;
        }
    }

    /**
     * {@inheritDoc}
     *
     */
    public function append($items)
    {
        $items = $items instanceof Iterator ? $items : new Collection($items);
        $list = new AppendIterator;
        $list->append($this);
        $list->append($items->_unwrap());
        return new Collection($list);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function combine($keyPath, $valuePath, $groupPath = null)
    {
        $options = [
            'keyPath' => $this->_propertyExtractor($keyPath),
            'valuePath' => $this->_propertyExtractor($valuePath),
            'groupPath' => $groupPath ? $this->_propertyExtractor($groupPath) : null
        ];

        $mapper = function ($value, $key, $mapReduce) use ($options) {
            $rowKey = $options['keyPath'];
            $rowVal = $options['valuePath'];

            if (!($options['groupPath'])) {
                $mapReduce->emit($rowVal($value, $key), $rowKey($value, $key));
                return;
            }

            $key = $options['groupPath']($value, $key);
            $mapReduce->emitIntermediate(
                [$rowKey($value, $key) => $rowVal($value, $key)],
                $key
            );
        };

        $reducer = function ($values, $key, $mapReduce) {
            $result = [];
            foreach ($values as $value) {
                $result += $value;
            }
            $mapReduce->emit($result, $key);
        };

        return new Collection(new MapReduce($this->_unwrap(), $mapper, $reducer));
    }

    /**
     * {@inheritDoc}
     *
     */
    public function nest($idPath, $parentPath)
    {
        $parents = [];
        $idPath = $this->_propertyExtractor($idPath);
        $parentPath = $this->_propertyExtractor($parentPath);
        $isObject = !is_array((new Collection($this))->first());

        $mapper = function ($row, $key, $mapReduce) use (&$parents, $idPath, $parentPath) {
            $row['children'] = [];
            $id = $idPath($row, $key);
            $parentId = $parentPath($row, $key);
            $parents[$id] =& $row;
            $mapReduce->emitIntermediate($id, $parentId);
        };

        $reducer = function ($values, $key, $mapReduce) use (&$parents, $isObject) {
            if (empty($key) || !isset($parents[$key])) {
                foreach ($values as $id) {
                    $parents[$id] = $isObject ? $parents[$id] : new ArrayIterator($parents[$id], 1);
                    $mapReduce->emit($parents[$id]);
                }
                return;
            }

            foreach ($values as $id) {
                $parents[$key]['children'][] =& $parents[$id];
            }
        };

        $collection = new MapReduce($this, $mapper, $reducer);
        if (!$isObject) {
            $collection = (new Collection($collection))->map(function ($value) {
                return $value->getArrayCopy();
            });
        }

        return new Collection($collection);
    }

    /**
     * {@inheritDoc}
     *
     * @return \Cake\Collection\Iterator\InsertIterator
     */
    public function insert($path, $values)
    {
        return new InsertIterator($this->_unwrap(), $path, $values);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function toArray($preserveKeys = true)
    {
        $iterator = $this->_unwrap();
        if ($iterator instanceof ArrayIterator) {
            $items = $iterator->getArrayCopy();
            return $preserveKeys ? $items : array_values($items);
        }
        return iterator_to_array($this, $preserveKeys);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function toList()
    {
        return $this->toArray(false);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * {@inheritDoc}
     *
     */
    public function compile($preserveKeys = true)
    {
        return new Collection($this->toArray($preserveKeys));
    }

    /**
     * {@inheritDoc}
     *
     * @return \Cake\Collection\Iterator\BufferedIterator
     */
    public function buffered()
    {
        return new BufferedIterator($this);
    }

    /**
     * {@inheritDoc}
     *
     * @return \Cake\Collection\Iterator\TreeIterator
     */
    public function listNested($dir = 'desc', $nestingKey = 'children')
    {
        $dir = strtolower($dir);
        $modes = [
            'desc' => TreeIterator::SELF_FIRST,
            'asc' => TreeIterator::CHILD_FIRST,
            'leaves' => TreeIterator::LEAVES_ONLY
        ];
        return new TreeIterator(
            new NestIterator($this, $nestingKey),
            isset($modes[$dir]) ? $modes[$dir] : $dir
        );
    }

    /**
     * {@inheritDoc}
     *
     * @return \Cake\Collection\Iterator\StoppableIterator
     */
    public function stopWhen($condition)
    {
        if (!is_callable($condition)) {
            $condition = $this->_createMatcherFilter($condition);
        }
        return new StoppableIterator($this, $condition);
    }

    /**
     * {@inheritDoc}
     *
     */
    public function unfold(callable $transformer = null)
    {
        if ($transformer === null) {
            $transformer = function ($item) {
                return $item;
            };
        }

        return new Collection(
            new RecursiveIteratorIterator(
                new UnfoldIterator($this, $transformer),
                RecursiveIteratorIterator::LEAVES_ONLY
            )
        );
    }

    /**
     * Returns the closest nested iterator that can be safely traversed without
     * losing any possible transformations.
     *
     * @return \Iterator
     */
    protected function _unwrap()
    {
        $iterator = $this;
        while (get_class($iterator) === 'Cake\Collection\Collection') {
            $iterator = $iterator->getInnerIterator();
        }
        return $iterator;
    }
}
