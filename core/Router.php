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
			return $this->routes[$requestType][$uri];
		}

		throw new Exception("Error Processing Request");
		
	}
}