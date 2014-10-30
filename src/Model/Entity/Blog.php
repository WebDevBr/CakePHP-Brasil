<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Inflector;
use Cake\ORM\TableRegistry;

/**
 * Blog Entity.
 */
class Blog extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'title' => true,
		'content' => true,
		'slug' => true,
		'user_id' => true,
		'tag_id' => true,
		'category_id' => true,
		'user' => true,
		'tag' => true,
		'category' => true,
		'likes' => true,
	];

    protected function _setTitle($title)
    {
        if (empty($this->_properties['slug'])) {
            $slug = strtolower(Inflector::slug($title));
            $slug = $this->checkSlug($slug);
            $this->set('slug', $slug);
        }
        return $title;
    }

    private function checkSlug($slug)
    {
        $blog = TableRegistry::get('Blogs');
        $i = $blog->find('all')
            ->where(['Blogs.slug LIKE'=>$slug.'%'])->count();

        if ($i > 0) {
            $i++;
            $slug = $slug.'-'.$i;
        }

        return $slug;
    }

}
