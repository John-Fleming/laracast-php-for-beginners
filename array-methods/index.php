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
  new Post('My First Post', true),
  new Post('My Second Post', true),
  new Post('My Third Post', true),
  new Post('My Fourth Post', false)
];

$unpublishedPosts = array_filter($posts, function ($post) {
  return ! $post->published;
});

$postTitles = array_map(function ($post) {
  return ['title' => $post->title];
}, $posts);

// return array of values from one key
$titles = array_column($posts, 'title');

// turn the posts array of objects into array of arrays
$modifiedPosts = array_map(function ($post) {
  return (array) $post;
}, $posts);

var_dump($titles);
