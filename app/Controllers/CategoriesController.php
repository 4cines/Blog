<?php

namespace app\Controllers;

require_once 'app/Models/Categories.php';

use app\Models\Categories;

class CategoriesController {

	protected $category;

	public function __construct(){  

		$this->category = new Categories();
	}

	public function index(){
		return $this->category->index();
	}

}

?>