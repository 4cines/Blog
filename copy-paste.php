<div class="container">
        <div class="row">
            <div class="col-12">
                <header> 
                    <h1 class="text-center mt-3 border titular"> <h1>PsiBlog</h1>
                </header>
            </div>  
                <nav>
                        <ul> 
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="categories.php">Categorias</a></li>
                            <li><a href="contact.php"></li>Contacto</a></li> <!-- añadir esta seccion -->
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
        </div>
    </div>
</body>