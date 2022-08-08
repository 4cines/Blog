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
    <title>PsiBlog</title>
</head>

<body>
   <header> 
        <h1>PsiBlog</h1>
   </header>
   <nav>
        <ul> 
            <li><a href="index.php">Inicio</a></li>
            <li><a href="categories.php">Categorias</a></li>
        </ul>
   </nav>
    <section>
        <?php foreach($posts as $post): ?> <!-- podría traer el nº de comentarios de cada post con un count() -->
            <article>
                <p><?php echo $post['created']; ?></p>
                <p>Author: <?php echo $post['username']; ?></p>
                <p><?php echo $post['categoryname']; ?></p>
                <h2><?php echo $post['title']; ?></h2>
                <p><?php echo $post['contents']; ?></p>
                <p><img src="<?=$post['image'];?>" alt="imagen_artículo"></p>
                <a href="post.php?id=<?php echo $post['id']; ?>">Leer más</a>
            </article>
        <?php endforeach; ?>
    </section>
    <aside>
        <h2>Categorias</h2> <!-- Aquí va un include categorias.php -->
        <ul>
            <?php foreach($posts as $post): ?>
                <li><?php echo $post['categoryname']; ?></li>
            <?php endforeach; ?>
        </ul>            
    </aside>
    <footer>
        <p>Psicólogas-online </p>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="module" src="dist/main.js"></script>
</body>

</html>