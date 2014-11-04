<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Inflector;
use Cake\ORM\TableRegistry;

/**
 * User Entity.
 */
class User extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'name' => true,
		'description' => true,
		'photo' => true,
		'email' => true,
		'password' => true,
		'blogs' => true,
		'likes' => true,
	];

    protected function _setName($name)
    {
        $slug = strtolower(Inflector::slug($name));
        $slug = $this->checkSlug($slug);
        $this->set('slug', $slug);
        return $name;
    }

	protected function _setPassword($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }

    private function checkSlug($slug)
    {
        $blog = TableRegistry::get('Users');
        $i = $blog->find('all')
            ->where(['Users.slug LIKE'=>$slug.'%'])->count();

        if ($i > 0) {
            $i++;
            $slug = $slug.'-'.$i;
        }

        return $slug;
    }


}
