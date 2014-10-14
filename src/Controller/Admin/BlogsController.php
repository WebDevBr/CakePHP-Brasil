<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Blogs Controller
 *
 * @property App\Model\Table\BlogsTable $Blogs
 */
class BlogsController extends AppController {

	public function beforeRender(\Cake\Event\Event $event) {
		$this->set('title', 'Administração da seção Blog');
	}

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = [
			'contain' => ['Users', 'Tags', 'Categories']
		];
		$this->set('blogs', $this->paginate($this->Blogs));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$blog = $this->Blogs->get($id, [
			'contain' => ['Users', 'Tags', 'Categories', 'Likes']
		]);
		$this->set('blog', $blog);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$blog = $this->Blogs->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Blogs->save($blog)) {
				$this->Flash->success('The blog has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The blog could not be saved. Please, try again.');
			}
		}
		$users = $this->Blogs->Users->find('list');
		$tags = $this->Blogs->Tags->find('list');
		$categories = $this->Blogs->Categories->find('list');
		$this->set(compact('blog', 'users', 'tags', 'categories'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$blog = $this->Blogs->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$blog = $this->Blogs->patchEntity($blog, $this->request->data);
			if ($this->Blogs->save($blog)) {
				$this->Flash->success('The blog has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The blog could not be saved. Please, try again.');
			}
		}
		$users = $this->Blogs->Users->find('list');
		$tags = $this->Blogs->Tags->find('list');
		$categories = $this->Blogs->Categories->find('list');
		$this->set(compact('blog', 'users', 'tags', 'categories'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$blog = $this->Blogs->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Blogs->delete($blog)) {
			$this->Flash->success('The blog has been deleted.');
		} else {
			$this->Flash->error('The blog could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
