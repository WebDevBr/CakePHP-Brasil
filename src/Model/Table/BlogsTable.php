<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Inflector;

/**
 * Blogs Model
 */
class BlogsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('blogs');
		$this->displayField('title');
		$this->primaryKey('id');
		$this->addBehavior('Timestamp');

		$this->belongsTo('Users', [
			'foreignKey' => 'user_id',
		]);
		$this->belongsTo('Tags', [
			'foreignKey' => 'tag_id',
		]);
		$this->belongsTo('Categories', [
			'foreignKey' => 'category_id',
		]);
		$this->hasMany('Likes', [
			'foreignKey' => 'blog_id',
		]);
	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->validatePresence('title', 'create')
			->notEmpty('title')
			->validatePresence('content', 'create')
			->notEmpty('content')
			->add('user_id', 'valid', ['rule' => 'numeric'])
			->validatePresence('user_id', 'create')
			->notEmpty('user_id')
			->add('tag_id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('tag_id')
			->add('category_id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('category_id');

		return $validator;
	}

	public function setUser($blogs, $id)
	{
		$blogs['user_id']=$id;
		return $blogs;
	}

}
