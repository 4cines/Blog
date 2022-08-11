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

}
?>