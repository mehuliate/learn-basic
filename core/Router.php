<?php

Class Router {
	protected $routes = [
		'GET' => [],
		'POST' => []
	];

	public static function load($file)
	{
		$router = new static; //or new self;
		require $file;
		return $router;
	}
	public function define($routes)
	{
		$this->routes = $routes;
	}

	public function get($url, $controller)
	{
		$this->routes['GET'][$url] = $controller;
	}

	public function post($url, $controller)
	{
		$this->routes['POST'][$url] = $controller;
	}

	public function direct($uri, $requestType)
	{
		//about/culture
		if (array_key_exists($uri, $this->routes[$requestType])){
			// return $this->routes[$requestType][$uri];
			return $this->callAction(
				//splat operator in php 7
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

		throw new Exception("Error Processing Request no url");
		
	}

	protected function callAction($controller, $action)
	{
		$controller = new $controller;

		if(! method_exists($controller, $action))
		{
			throw new Exception(
				"{$controller} does not respond to the {$action} action"
			);
		}

		return $controller->$action();
	}
}