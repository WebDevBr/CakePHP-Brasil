<?php

namespace App\Controller;

use Cake\Event\Event;

class UsersController extends AppController
{
	public function beforeFilter(Event $event) {
	    parent::beforeFilter($event);
	    $this->Auth->allow(['cadastro', 'logout']);
	    $this->set(['title'=>'Acesse o CakePHP Brasil!']);
	}

	public function ver($slug) {
		$user = $this->Users->find('all',
			[
				'contain'=>[],
				'conditions'=>['Users.slug'=>$slug]
			]
		)->first();

		$this->paginate = [
			'contain' => ['Users', 'Tags', 'Categories'],
			'conditions'=>['Blogs.user_id'=>$user->id],
			'order'=>['Blogs.created DESC']
		];
		
		$this->set(['user'=>$user, 'title'=>$user->name, 'artigos' => $this->paginate('Blogs')]);
		$this->layout = 'perfil';
	}

	public function cadastro() {
		$user = $this->Users->newEntity($this->request->data);
		if ($this->request->is('post')) {
			$user = $this->Users->security($user);
			if ($this->Users->save($user)) {
				$this->Flash->success('Você acabou de se cadastrar com sucesso');
				return $this->redirect('/devs/acesso');
			} else {
				$this->Flash->error('Opa! Verifique seus dados!');
			}
		}
		$this->set(['user'=>$user, 'title'=>'Participe do CakePHP Brasil']);
	}

	public function acesso() {
	    if ($this->request->is('post')) {
	        $user = $this->Auth->identify();
	        if ($user) {
	            $this->Auth->setUser($user);
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Flash->error(__('Invalid username or password, try again'));
	    }
	}

	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}

	public function perfil() {
		$user = $this->Users->get($this->Auth->user('id'), [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$user = $this->Users->patchEntity($user, $this->request->data);
			$user = $this->Users->security($user);
			if ($this->Users->save($user)) {
				$this->Flash->success('Perfil atualizado.');
			} else {
				$this->Flash->error('O seu perfil não pode ser atualizado, por favor, verifique.');
			}
		}
		$this->set(compact('user'));
	}

	public function senha() {
		$user = $this->Users->get($this->Auth->user('id'), [
			'contain' => []
		]);
		unset($user->password);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$user = $this->Users->patchEntity($user, $this->request->data);
			$user = $this->Users->security($user);
			if ($this->Users->save($user)) {
				$this->Flash->success('Perfil atualizado.');
			} else {
				$this->Flash->error('O seu perfil não pode ser atualizado, por favor, verifique.');
			}
		}
		$this->set(compact('user'));
	}
}