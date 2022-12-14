<?php

namespace app\Models;
require_once 'core/Connection.php';

use PDO;
use core\Connection;

class Posts extends Connection 
{
	public function index(){
		
                $query =  "SELECT posts.id AS id, posts.title AS title, posts.contents AS content, posts.image AS image,
                        categories.name AS category_name, users.name AS username, users.surname AS surname,
                        posts.category_id AS category_id, posts.username_id AS username_id, 
                        date(posts.created) AS created
                        FROM posts 
                        INNER JOIN categories ON posts.category_id = categories.id
                        INNER JOIN users ON posts.username_id = users.id
                        WHERE posts.active = 1";
                
                $stmt = $this->pdo->prepare($query);
                $result = $stmt->execute();

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

        public function indexbycategory($category_id){
                $query= "SELECT posts.id AS id, posts.title AS title, posts.contents AS content, posts.image AS image,
                        categories.name AS category_name, users.name AS username, users.surname AS surname,
                        posts.category_id AS category_id, posts.username_id AS username_id, 
                        date(posts.created) AS created
                        FROM posts 
                        INNER JOIN categories ON posts.category_id = categories.id
                        INNER JOIN users ON posts.username_id = users.id
                        WHERE posts.active = 1 AND categories.id = $category_id";

                $stmt = $this->pdo->prepare($query);
                $result = $stmt->execute();

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getcontent($post_id){
                $query= "SELECT posts.id AS id, posts.title AS title, posts.contents AS content, posts.image AS image,
                        categories.name AS category_name, users.name AS username, users.surname AS surname,
                        posts.category_id AS category_id, posts.username_id AS username_id, 
                        date(posts.created) AS created
                        FROM posts 
                        INNER JOIN categories ON posts.category_id = categories.id
                        INNER JOIN users ON posts.username_id = users.id
                        WHERE posts.active = 1 AND posts.id= $post_id";

                $stmt = $this->pdo->prepare($query);
                $result = $stmt->execute();

                return $stmt->fetch(PDO::FETCH_ASSOC);
        }
}
?>