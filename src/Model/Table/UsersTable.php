<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Inflector;

use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Imagine\Image\Point;

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

    public function beforeSave($event, $entity) {
        if (isset($entity->photo) and is_array($entity->photo) and isset($entity->id)) {
            if ($this->imageValidate($entity->photo)) {
                $entity->photo=$this->imageSave($entity->photo, $entity->id);
            } else {
                unset($entity->photo);
            }
        } else {
            unset($entity->photo);
        }

    }

    public function security($user, $removePsw = false)
    {
        if (isset($user['properties']['role']))
            unset($user['properties']['role']);
        
        if ($removePsw and isset($user['properties']['password']) and empty($user['properties']['password']))
            unset($user['properties']['password']);

        return $user;
    }

    public function perfis()
    {
        return $this->find('all', [
            'limit'=>10,
            'order'=>'RAND()',
            'conditions'=>[
               // 'Users.photo !='=>null
            ]
        ]);
    }

    protected function imageValidate($file)
    {
        if ($file['error']>0 or $file['size']==0) {
            return false;
        }
        return true;
    }

    protected function imageSave($file, $id)
    {
        $imagine = new Imagine();
        $image = $imagine->open($file['tmp_name']);
        $this->mainImage($image, $file, $id);
        $name = $this->thumbnailImage($image, $file, $id);
        return $name;
    }

    protected function mainImage($image, $file,$id)
    {
        $size = $image->getSize();
        if ($size->getWidth() > 800 or $size->getHeight() > 600)
            $image->resize($size->widen(800));

        $name = $this->fileImage($file['name'], $id.'-');
        $image->save($this->dirImage($name));
        return $name;
    }

    protected function thumbnailImage($image, $file, $id)
    {
        $size = $image->getSize();

        if ($size->getWidth() > 110 or $size->getHeight() > 80) {
            $image->resize($size->widen(110));
            $size = $image->getSize();
        }

        $half_w = $size->getWidth() / 2;
        $half_h = $size->getHeight() / 2;
        $thumb_w = 110;
        $thumb_h = 80;
        $half_thumb_w = $thumb_w / 2;
        $half_thumb_h = $thumb_h / 2;

        $name = $this->fileImage($file['name'], $id.'-110-80');

        $image->crop(new Point($half_w-$half_thumb_w , $half_h-$half_thumb_h), new Box($thumb_w, $thumb_h));
        $image->save($this->dirImage($name));
        return $name;
    }

    protected function fileImage($name , $prefix)
    {
        $name = pathinfo($name);
        $filename = strtolower(Inflector::slug($name['filename']));
        return $prefix.$filename.'.'.$name['extension'];
    }

    protected function dirImage($name)
    {
        return WWW_ROOT.'img'.DS.'perfil'.DS.$name;
    }

}