<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property App\Model\Table\CategoriesTable $Categories
 */
class CategoriesController extends AppController {

	public function beforeRender(\Cake\Event\Event $event) {
		$this->set('title', 'Administração da seção Categorias');
	}

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('categories', $this->paginate($this->Categories));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$category = $this->Categories->get($id, [
			'contain' => ['Blogs']
		]);
		$this->set('category', $category);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$category = $this->Categories->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Categories->save($category)) {
				$this->Flash->success('The category has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The category could not be saved. Please, try again.');
			}
		}
		$this->set(compact('category'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$category = $this->Categories->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$category = $this->Categories->patchEntity($category, $this->request->data);
			if ($this->Categories->save($category)) {
				$this->Flash->success('The category has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The category could not be saved. Please, try again.');
			}
		}
		$this->set(compact('category'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$category = $this->Categories->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Categories->delete($category)) {
			$this->Flash->success('The category has been deleted.');
		} else {
			$this->Flash->error('The category could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
