<?php

namespace app\Controllers;

require_once 'app/Models/Posts.php';

use app\Models\Posts;

class PostsControlles {

	protected $post;

	public function __construct(){  

		$this->post = new Table();
	}

	public function index(){
		return $this->post->index();
	}

}

?>