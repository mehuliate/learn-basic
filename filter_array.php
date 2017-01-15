<?php
class Post
{
	public $title;
	public $published;

	public function __construct($title, $published)
	{
		$this->title = $title;
		$this->published = $published;		
	}

}

$posts = [
	new Post('Data Pertama', true),
	new Post('Data Kedua', true),
	new Post('Data Ketiga', true),
	new Post('Data Keempat', false)
];

// $unpublishedPost = array_filter($posts, function($post) {
// 	return ! $post->published;
// });

// $publishedPost = array_filter($posts, function($post) {
// 	return $post->published;
// });

// var_dump($publishedPost);

//kegunaannya array map merubah object casting jadi array
// $modified = array_map(function($post){
// 	return (array) $post;
// }, $posts);

//kegunaannya array map merubah menampilkan sebagian saja data
// $modified = array_map(function($post){
// 	return ['title' => $post->title];
// }, $posts);

//kegunaannya array map merubah object jadi string
// $titles = array_map(function($post){
// 	return $post->title;
// }, $posts);

//juga array column merubah object jadi string
// $titles = array_column($posts, 'title');

//pake foreach
// foreach ($posts as $index => $post) {
// 	$posts[$index] = (array) $post;
// }

//
// $posts = array_map(function ($post){
// 	return (array) $post;
// }, $posts);

//mengembalikan sepecific data
// $authors = array_column($posts, 'author', 'title');

var_dump($posts);