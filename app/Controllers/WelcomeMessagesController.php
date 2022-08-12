<?php

namespace app\Controllers;

require_once 'app/Models/WelcomeMessages.php';

use app\Models\WelcomeMessages;

class WelcomeMessagesController {

	protected $category;

	public function __construct(){  

		$this->welcome_message = new WelcomeMessages();
	}

	public function index(){
		return $this->welcome_message->index();
	}

}

?>