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
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
                        <a class="nav-link" href="#">Categorias</a>
                        <a class="nav-link" href="#">Quienes somos</a>
                        <a class="nav-link" href="#">Contacto</a>
                        <a class="nav-link" href="#">Login</a>
                    </div>
                </div>
            </div>
        </nav>