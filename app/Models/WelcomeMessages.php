<?php

namespace app\Models;
require_once 'core/Connection.php';

use PDO;
use core\Connection;

class WelcomeMessages extends Connection 
{
	public function index(){
		
        $query =  "SELECT welcome_message FROM welcome_messages WHERE active = 1";
                
        $stmt = $this->pdo->prepare($query);
        $result = $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
	}

}
?>