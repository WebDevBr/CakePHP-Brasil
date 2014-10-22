<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity.
 */
class Category extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'title' => true,
		'blogs' => true,
	];

}
