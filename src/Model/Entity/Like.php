<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Like Entity.
 */
class Like extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'blog_id' => true,
		'user_id' => true,
		'from' => true,
		'blog' => true,
		'user' => true,
	];

}
