<?php

namespace app\Models;
require_once 'core/Connection.php';

use PDO;
use core\Connection;

class Categories extends Connection 
{
	public function index(){
		
		$query =  "SELECT id AS category_id, name AS category_name FROM categories WHERE active = 1";
				
		$stmt = $this->pdo->prepare($query);
		$result = $stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getCategoryName($category){

		$query =  "SELECT name AS category_name FROM categories WHERE active = 1 AND id = $category";
		
		$stmt = $this->pdo->prepare($query);
		$result = $stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

}
?>