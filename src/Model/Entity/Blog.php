<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

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

}
