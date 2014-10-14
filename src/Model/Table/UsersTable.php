<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('users');
		$this->displayField('name');
		$this->primaryKey('id');
		$this->addBehavior('Timestamp');

		$this->hasMany('Blogs', [
			'foreignKey' => 'user_id',
		]);
		$this->hasMany('Likes', [
			'foreignKey' => 'user_id',
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
			->validatePresence('name', 'create')
			->notEmpty('name')
			->allowEmpty('description')
			->allowEmpty('photo')
			->add('email', 'valid', ['rule' => 'email'])
			->validatePresence('email', 'create')
			->notEmpty('email')
			->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table'])
			->validatePresence('password', 'create')
			->notEmpty('password');

		return $validator;
	}

	public function security($user, $removePsw = false)
    {
    	if (isset($user['properties']['role']))
    		unset($user['properties']['role']);
    	
    	if ($removePsw and isset($user['properties']['password']) and empty($user['properties']['password']))
    		unset($user['properties']['password']);

    	return $user;
    }

}
