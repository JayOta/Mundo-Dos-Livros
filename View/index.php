<?php 
  require "../Controller/cadastro.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Mundo dos Livros</title>
</head>
<body>
    <!-- Header-inicio -->
    <header>
      <nav class="navbar">
        <div class="container-fluid">
          <a class="logo" href="index.php">
            <img src="img/logo.jpg" alt="logo">
          </a>
          <form class="searchPart form d-flex" role="search">
            <a class="navbar-brand">Mundo dos Livros</a>
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
          </form>
          <div class="linkPart">
            <button class="navBtns"><i class='bx bx-cart'></i></button>
            <button class="navBtns"><i class='bx bx-user'></i></button>
        </div>
        </div>
      </nav>
    </header>
    <!-- Header-fim -->
    <main>
      <form method="post">
        <!-- Carousel-inicio -->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"> 
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner" style="background: #000; border-radius: 8px;">
            <div class="carousel-item active">
              <img src="img/carousel-book-1.jpg" class="carousel-img d-block" alt="Carousel" width="100%" height="600px">
              <div class="carousel-caption d-none d-md-block">
                <h2>Conheça o Mundo dos Livros</h2>
                <p>Novos lançamentos toda semana!</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/carousel-book-2.jpg" class="carousel-img d-block" alt="Carousel" width="100%" height="600px">
              <div class="carousel-caption d-none d-md-block">
                <h2>Conheça o Mundo dos Livros</h2>
                <p>Novos lançamentos toda semana!</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/carousel-book-3.jpg" class="carousel-img d-block" alt="Carousel" width="100%" height="600px">
              <div class="carousel-caption d-none d-md-block">
                <h2>Conheça o Mundo dos Livros</h2>
                <p>Novos lançamentos toda semana!</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- Carousel-fim -->

        <br><br>

        <!-- Escolha por Categoria-inicio -->
        <h3 class="categoria">Escolha por Categoria</h3>
        <div class="por-categoria">
        <div class="main-card card">
          <a href="#">
            <img src="../View/img/categoria-1.webp" alt="Anime">
            <div class="carousel-caption">
              <h2>Anime</h2>
            </div>
          </a>
        </div>
        <div class="mini-cards">
          <div class="column">
            <div class="mini-card card">
              <a href="#">
                <img src="../View/img/categoria-2.png" alt="Romance">
                <div class="carousel-caption">
                  <h2>Romance</h2>
                </div>
              </a>
            </div>
            <div class="mini-card card">
              <a href="#">
                <img src="../View/img/categoria-3.jpg" alt="Ficção">
                <div class="carousel-caption">
                  <h2>Ficção</h2>
                </div>
              </a>
            </div>
          </div>
            <div class="column">
              <div class="mini-card card">
                <a href="#">
                  <img src="../View/img/categoria-4.jpg" alt="Conto">
                  <div class="carousel-caption">
                    <h2>Conto</h2>
                  </div>
                </a>
              </div>
              <div class="mini-card card">
                <a href="#">
                  <img src="../View/img/categoria-5.jpg" alt="Infantis">
                  <div class="carousel-caption">
                    <h2>Infantis</h2>
                  </div>
                </a>
              </div>
            </div>
            <div class="button">
              <button class="categoriaBtn"><i class='bx bxs-chevron-right'></i></button>
            </div>
          </div>
      </div>
        <!-- Escolha por Categoria-fim -->

        <br><br><br><br>

        <!-- Gosta de alguns autores -->
      <h3 class="autores">Gosta de alguns autores ?</h3>
      <div class="autores">
        <div class="alguns-autores">
          <a href="#">
            <img src="../View/img/autor-1.jpg" alt="autor-1">
            <p>J.K Rowling</p>
          </a>
        </div>
        <div class="alguns-autores">
          <a href="#">
            <img src="../View/img/autor-2.jpg" alt="autor-2">
            <p>Jeff Kinney</p>
          </a>
        </div>
        <div class="alguns-autores">
          <a href="#">
            <img src="../View/img/autor-3.webp" alt="autor-3">
            <p>J. R. R. Tolkien</p>
          </a>
        </div>
        <div class="alguns-autores">
          <a href="#">  
            <img src="../View/img/autor-4.jpg" alt="autor-4">
            <p>Rick Riordan</p>
          </a>
        </div>
        <div class="alguns-autores">
          <a href="#">
            <img src="../View/img/autor-5.avif" alt="autor-5">
            <p>Eichiro Oda</p>
          </a>
        </div>
      </div>
      <!-- Gosta de alguns autores-fim -->

      <br><br><br><br>

      <!-- Lançamentos em Literatura -->
      <h3 class="lancamentos">Lançamentos em Literatura</h3>
      <br><br>
      <div class="lancamentos-div">
        <div class="card cards" aria-hidden="true">
          <a href="#">
            <img src="../View/img/book-1.jpg" class="card-img-top" alt="Foto do Livro">
            <div class="card-body">
              <h5 class="card-title">O Senhor dos Aneis - Parte 1</h5>
              <p class="card-text">R$ 95,00</p>
            </div>
          </a>
        </div>
        <div class="card cards" aria-hidden="true">
          <a href="#">
            <img src="../View/img/book-2.jpg" class="card-img-top" alt="Foto do Livro">
            <div class="card-body">
              <h5 class="card-title">O Diário de Um Banana - Toque do Queijo</h5>
              <p class="card-text">R$ 56,90</p>
            </div>
          </a>
        </div>
        <div class="card cards" aria-hidden="true">
          <a href="#">
            <img src="../View/img/book-3.jpg" class="card-img-top" alt="Foto do Livro">
            <div class="card-body">
              <h5 class="card-title">Percy Jackson e Os Olimpianos - O Ladrão de Raios</h5>
              <p class="card-text">R$ 44,92</p>
            </div>
          </a>
        </div>
        <div class="card cards" aria-hidden="true">
          <a href="#">
            <img src="../View/img/book-4.jpg" class="card-img-top" alt="Foto do Livro">
            <div class="card-body">
              <h5 class="card-title">One Piece - Vol. 2</h5>
              <p class="card-text">R$ 76,16</p>
            </div>
          </a>
        </div>
        <div class="card cards" aria-hidden="true">
          <a href="#">
            <img src="../View/img/book-5.jpg" class="card-img-top" alt="Foto do Livro">
            <div class="card-body">
              <h5 class="card-title">Harry Potter - Pedra Filosofal</h5>
              <p class="card-text">R$ 47,42</p>
            </div>
          </a>
        </div>
      </div>
      <!-- Lançamentos em Literatura-fim -->
    </form>
  </main>

  <br><br><br><br>
  
  <footer>
    <p>&copy; João Otávio</p>
  </footer>
</body>
</html>