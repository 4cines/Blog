<?php

namespace app\Controllers;

require_once 'app/Models/Posts.php';

use app\Models\Posts;

class PostsController {

	protected $post;

	public function __construct(){  

		$this->post = new Posts();
	}

	public function index(){
		return $this->post->index();
	}

}

?>