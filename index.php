<?php

	require_once 'app/Controllers/PostsController.php';

	use app\Controllers\PostsController;

	$post = new PostsController();
	$posts = $post->index();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="articulos actuales sobre psicologia">
        <meta name="author" content="Psicólogas-online">
        <meta name= "keywords" contents="psicologia, actualidad, psicologia forense, investigacion">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <title>PsiBlog</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.jpeg" alt="" width="200">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11 9C11 10.66 9.66 12 8 12C6.34 12 5 10.66 5 9C5 7.34 6.34 6 8 6C9.66 6 11 7.34 11 9M14 20H2V18C2 15.79 4.69 14 8 14C11.31 14 14 15.79 14 18M7 9C7 9.55 7.45 10 8 10C8.55 10 9 9.55 9 9C9 8.45 8.55 8 8 8C7.45 8 7 8.45 7 9M4 18H12C12 16.9 10.21 16 8 16C5.79 16 4 16.9 4 18M22 12V14H13V12M22 8V10H13V8M22 4V6H13V4Z" />
                    </svg></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link" href="#">Categorias</a>
                        <a class="nav-link" href="#">Quienes somos</a>
                        <a class="nav-link" href="#">Contacto</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <?php foreach($posts as $post): ?>
                    <div class="col-sm">
                        <div class="card w-100 card-border mb-5">
                            <div class="card">
                                <img src="<?=$post['image'];?>" class="card-img-top" alt="imagen_artículo">
                                <div class="#card-body text-center pb-5 pt-5">
                                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                                    <p class="card-text"> Publicado el: <?php echo $post['created']; ?></p>
                                    <p class="card-text">Author: <?php echo $post['username']; ?></p>
                                    <p class="card-text"><?php echo $post['categoryname']; ?></p>
                                    <a href="#" class="btn btn-primary">Leer</a>
                                </div>
                            </div>
                        </div>    
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
       

        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="module" src="dist/main.js"></script>
    </body>
</html>