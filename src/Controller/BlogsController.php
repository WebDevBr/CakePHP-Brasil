<?php

namespace App\Controller;

use Cake\Event\Event;

class BlogsController extends AppController {

	public function beforeFilter(Event $e) {
	    parent::beforeFilter($e);
	    $this->Auth->allow(['index', 'ver']);
	}

	public function ver($slug = null) {
		$blog = $this->Blogs->find('all',
			[
				'contain'=>['Users'],
				'conditions'=>['Blogs.slug'=>$slug, 'Blogs.status <='=>1]
			]
		)->first();
		$this->set(['blog'=>$blog, 'title'=>$blog->title]);
	}

	public function novo() {
		$this->request->data = $this->Blogs->setUser($this->request->data, $this->Auth->user('id'));
		$blog = $this->Blogs->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Blogs->save($blog)) {
				$this->Flash->success('Seu artigo foi salvo com sucesso.');
				return $this->redirect('/meus-artigos');
			} else {
				$this->Flash->error('Seu artigo não foi salvo, verifique os dados.');
			}
		}
		//$tags = $this->Blogs->Tags->find('list');
		//$categories = $this->Blogs->Categories->find('list');
		//$this->set(compact('blog', 'tags', 'categories'));
		$this->set(compact('blog'));
	}

	public function editar($id = null) {
		$blog = $this->Blogs->get($id, [
			'contain' => []
		]);

		if($blog->user_id != $this->Auth->user('id')) {
			$this->Flash->success('Você não pode editar este artigo.');
			return $this->redirect('/meus-artigos');
		}
		if ($this->request->is(['patch', 'post', 'put'])) {
			$this->request->data = $this->Blogs->setUser($this->request->data, $this->Auth->user('id'));
			$blog = $this->Blogs->patchEntity($blog, $this->request->data);
			if ($this->Blogs->save($blog)) {
				$this->Flash->success('Seu artigo foi salvo com sucesso.');
			} else {
				$this->Flash->error('Seu artigo não foi salvo, verifique os dados.');
			}
		}
		//$tags = $this->Blogs->Tags->find('list');
		//$categories = $this->Blogs->Categories->find('list');
		//$this->set(compact('blog', 'tags', 'categories'));
		$this->set(compact('blog'));
	}

	public function index() {
		$this->paginate = [
			'contain' => ['Users', 'Tags', 'Categories'],
			'order'=>['Blogs.created DESC'],
            'conditions'=>[
                'Blogs.status'=>1
            ]
		];
		$perfis = $this->Blogs->Users->perfis();
		$this->set([
			'artigos'=>$this->paginate($this->Blogs),
			'perfis'=>$perfis
		]);
	}
	public function meusArtigos() {

		$this->paginate = [
			'contain' => ['Tags', 'Categories'],
			'conditions'=> ['Blogs.user_id'=>$this->Auth->user('id')]
		];
		$artigos = $this->paginate($this->Blogs);
		$this->set(['artigos'=> $artigos, 'title'=>'Seus artigos publicados aqui no CakePHP Brasil']);
		if (empty($artigos->__debugInfo()['items'])) {
			$this->set('artigo_msg', 'Nenhum artigo seu para exibir!');
			$this->render('nenhum_artigo');
		}
	}
}