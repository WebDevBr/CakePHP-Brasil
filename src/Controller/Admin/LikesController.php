<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Likes Controller
 *
 * @property App\Model\Table\LikesTable $Likes
 */
class LikesController extends AppController {

	public function beforeRender(\Cake\Event\Event $event) {
		$this->set('title', 'Administração da seção Likes');
	}

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = [
			'contain' => ['Blogs', 'Users']
		];
		$this->set('likes', $this->paginate($this->Likes));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$like = $this->Likes->get($id, [
			'contain' => ['Blogs', 'Users']
		]);
		$this->set('like', $like);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$like = $this->Likes->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Likes->save($like)) {
				$this->Flash->success('The like has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The like could not be saved. Please, try again.');
			}
		}
		$blogs = $this->Likes->Blogs->find('list');
		$users = $this->Likes->Users->find('list');
		$this->set(compact('like', 'blogs', 'users'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$like = $this->Likes->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$like = $this->Likes->patchEntity($like, $this->request->data);
			if ($this->Likes->save($like)) {
				$this->Flash->success('The like has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The like could not be saved. Please, try again.');
			}
		}
		$blogs = $this->Likes->Blogs->find('list');
		$users = $this->Likes->Users->find('list');
		$this->set(compact('like', 'blogs', 'users'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$like = $this->Likes->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Likes->delete($like)) {
			$this->Flash->success('The like has been deleted.');
		} else {
			$this->Flash->error('The like could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
