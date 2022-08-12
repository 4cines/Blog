<?php

namespace app\Controllers;

require_once 'app/Models/AboutUs.php';

use app\Models\AboutUs;

class AboutUsController {

	protected $about_us;

	public function __construct(){  

		$this->about_us = new AboutUs();
	}

	public function index(){
		return $this->about_us->index();
	}

}

?>