<?php

use Cake\Core\Plugin;
use Cake\Routing\Router;

Router::prefix('admin', function($routes) {
	$routes->connect('/', ['controller' => 'blogs', 'action'=>'index']);
    $routes->connect('/:controller', ['action' => 'index']);
    $routes->connect('/:controller/:action/*');
});

Router::scope('/', function($routes) {
	$routes->connect('/', ['controller' => 'Blogs', 'action' => 'index']);
	$routes->connect('/activation', ['controller' => 'Users', 'action' => 'activation']);
	$routes->connect('/devs', ['controller' => 'Users', 'action' => 'index']);
	$routes->connect('/devs/:action/*', ['controller' => 'Users']);
	$routes->connect('/meus-artigos', ['controller' => 'Blogs', 'action'=>'meusArtigos']);
	$routes->connect('/artigos/:action/*', ['controller' => 'Blogs']);
	$routes->connect('/artigo/*', ['controller' => 'Blogs', 'action'=>'ver']);
	$routes->connect('/pages/*', ['controller' => 'Pages', 'action'=>'display']);
	$routes->connect(
		'/:slug',
		['controller' => 'Users', 'action'=>'ver'],
		['slug'=>'[a-z\-]+', 'pass'=>['slug']]
	);

	$routes->fallbacks();
});

Plugin::routes();
