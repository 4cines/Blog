<?php

namespace app\Models;
require_once 'core/Connection.php';

use PDO;
use core\Connection;

class AboutUs extends Connection 
{
	public function index(){
		
        $query =  "SELECT about_us.id AS id, about_us.user_id AS user_id, about_us.image AS image_user, about_us.profession AS
            profession, users.surname AS surname, users.name AS user_name, about_us.presentation AS presentation
            FROM about_us
            INNER JOIN users ON about_us.user_id = users.id
            WHERE about_us.active = 1";
                
        $stmt = $this->pdo->prepare($query);
        $result = $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}
?>