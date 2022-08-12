<?php

	require_once 'app/Controllers/PostsController.php';
    require_once 'app/Controllers/CategoriesController.php';

	use app\Controllers\PostsController;
    use app\Controllers\CategoriesController;

	$post = new PostsController();
    $category = new CategoriesController();

    if(!empty($_GET['category'])){
        $posts = $post->indexbycategory($_GET['category']);
    }else{
        $posts = $post->index();
    }

    $categories = $category->index();
   

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
                <a class="navbar-brand" href="#"><img src="assets/img/logo.jpeg" alt="" width="200"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> 
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M16,20H20V16H16M16,14H20V10H16M10,8H14V4H10M16,8H20V4H16M10,14H14V10H10M4,14H8V10H4M4,20H8V16H4M10,20H14V16H10M4,8H8V4H4V8Z" />
                    </svg>
                </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                            <ul class="dropdown-menu">
                                <?php foreach($categories as $category): ?>
                                    <li class="dropdown-item"><a href="index.php?category=<?php echo $category['category_id'] ?>"><?php echo $category['category_name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre nosotras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin for partners</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <?php foreach($posts as $post): ?>
                    <div class="col-sm-4">
                        <div class="card card-border">
                            <div class="card">
                                <img src="<?=$post['image'];?>" class="card-img-top" alt="imagen_artículo">
                                <div class="#card-body text-center pb-5 pt-5">
                                    <h5 class="card-title fw-bold"><?php echo $post['title']; ?></h5>
                                    <p class="card-text"> Publicado el: <?php echo $post['created']; ?></p>
                                    <p class="card-text">Author: <?php echo $post['username']; ?></p>
                                    <p class="card-text"><?php echo $post['category_name']; ?></p>
                                    <a href="posts.php?post=<?php echo $post['id']; ?>" class="btn btn-primary">Leer</a>
                                </div>
                            </div>
                        </div>    
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container">
            <div class="row"> 
                <div class="col-12">
                <footer class="mb-5">
                    <p>Psicólogas-online</p>
                    <!-- icono twitwer -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 
                            1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 
                            3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 
                            3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    <!-- icono facebook -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="25" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172 .883.22 1.402l.01.104.022.26.008.104c.065.914.073
                            1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 
                            1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312 -5.569.334-6.18.335h-.142c-.309 0-1.587-.006 -2.927-.052l-.17-.006-.087-.004-.171-.007-.171
                            -.007c-1.11-.049 -2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986
                            -.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l .007-.103.003-.052.008-.104.022-.26.01-.104c
                            .048-.519.119-1.023.22-1.402a2.007 2.007 0 0 
                            1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17 -.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157
                            -2.408L6.4 5.209z" />
                    </svg>
                </footer>
            </div>
        </div>
        

        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="module" src="dist/main.js"></script>
    </body>
</html>