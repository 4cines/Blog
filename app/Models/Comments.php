<?php

namespace app\Models;
require_once 'core/Connection.php';

use PDO;
use core\Connection;

class Comments extends Connection 
{
	public function getcommentsbypost($post_id){
		
        $query =  "SELECT * FROM comments WHERE active = 1 AND post_id = $post_id";
                
        $stmt = $this->pdo->prepare($query);
        $result = $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}
?>