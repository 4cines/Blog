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

	public function indexbycategory($category_id){
		return $this->post->indexbycategory($category_id);
	}

	public function getcontent($post_id){
		return $this->post->getcontent($post_id);
	}

}

?>