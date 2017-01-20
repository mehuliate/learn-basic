<?php
$database = require 'core/bootstrap.php';

require Router::load('routes.php')
	->direct(Request::uri(), Request::method());

//notes
// $task = array_map(function ($task){
// 	$t = new Task();
// 	$t->description = $task['description']
// })
//
// var_dump($_SERVER);
// require $router->direct($uri);
// $router = new Router;
// require 'routes.php';