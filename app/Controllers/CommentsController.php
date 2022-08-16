<?php

namespace app\Controllers;

require_once 'app/Models/Comments.php';

use app\Models\Comments;

class CommentsController {

	protected $comments;

	public function __construct(){  

		$this->comments = new Comments();
	}

	public function getcommentsbypost($post_id){
		return $this->comments->getcommentsbypost($post_id);
	}

}

?>