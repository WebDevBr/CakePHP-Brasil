<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Network\Exception\UnauthorizedException;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

/**
 * Components this controller uses.
 *
 * Component names should not include the `Component` suffix. Components
 * declared in subclasses will be merged with components declared here.
 *
 * @var array
 */
	public $components = [
		'Flash',
		'EmailNotify',
		'Auth' => [
			'loginAction'=>[
				'prefix'=>false,
				'controller'=>'users',
				'action'=>'acesso'
			],
			'authenticate'=> [
				'Form'=>[
					'fields'=> ['username'=>'email'],
					'scope' => ['status' => 1],
				]
			],
			'authError'=>' Nenhum dado de acesso encontrado ',
            'redirectUrl' => '/meus-artigos',
            'logoutRedirect' =>  '/'
        ]
	];
	
	public $helpers = ['Form', 'Markdown','Html'];

	public function beforeFilter(Event $e) {
		$params = $this->request->params;
		if (!empty($params['prefix']) and $params['prefix']=='admin') {
			if ($this->Auth->user('admin') != true) {
				throw new UnauthorizedException('Opa!, você não pode estar aqui!');
			}
		}
	}

	public function beforeRender(Event $e) {
		$authUser = false;
		if (!empty(($this->Auth->user())))
			$authUser = $this->Auth->user();
		$this->set(['authUser'=>$authUser]);
	}
	
}
