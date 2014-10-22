<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Tags Controller
 *
 * @property App\Model\Table\TagsTable $Tags
 */
class TagsController extends AppController {

	public function beforeRender(\Cake\Event\Event $event) {
		$this->set('title', 'Administração da seção Tags');
	}

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('tags', $this->paginate($this->Tags));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$tag = $this->Tags->get($id, [
			'contain' => ['Blogs']
		]);
		$this->set('tag', $tag);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$tag = $this->Tags->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Tags->save($tag)) {
				$this->Flash->success('The tag has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The tag could not be saved. Please, try again.');
			}
		}
		$this->set(compact('tag'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$tag = $this->Tags->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$tag = $this->Tags->patchEntity($tag, $this->request->data);
			if ($this->Tags->save($tag)) {
				$this->Flash->success('The tag has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The tag could not be saved. Please, try again.');
			}
		}
		$this->set(compact('tag'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$tag = $this->Tags->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Tags->delete($tag)) {
			$this->Flash->success('The tag has been deleted.');
		} else {
			$this->Flash->error('The tag could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
