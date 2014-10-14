<?php

use Cake\Core\Plugin;
use Cake\Routing\Router;

Router::prefix('admin', function($routes) {
	$routes->connect('/', ['controller' => 'blogs', 'action'=>'index']);
    $routes->connect('/:controller', ['action' => 'index']);
    $routes->connect('/:controller/:action/*');
});

Router::scope('/', function($routes) {
	$routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
	$routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

	$routes->fallbacks();
});

Plugin::routes();
