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
          <a class="logo" href="index.php"><img src="img/logo.jpg" alt="logo"></a>
          <a class="navbar-brand">Mundo dos Livros</a>
          <form class="form d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
          </form>
          <button class="buy"><i class='bx bx-cart'></i></button>
          <button class="login"><i class='bx bx-user'></i></button>
        </div>
      </nav>
    </header>
    <main>
    <!-- Header-fim -->
        <!-- Carousel -->
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="background: #000; border-radius: 8px;">
          <div class="carousel-item active">
            <img src="img/carousel-book.jpg" class="carousel-img d-block" alt="Carousel" width="100%" height="500px">
            <div class="carousel-caption d-none d-md-block">
              <h2>Conheça o Mundo dos Livros</h2>
              <p>Novos lançamentos toda semana!</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Carousel-fim -->

      <br><br>

      <!-- Escolha por Categoria-inicio -->
      <h3 class="categoria">Escolha por Categoria</h3>
      <div class="por-categoria card" style="background-color: #4f759b;">
        <div class="mini-cards">
          <div class="column">
            <div class="mini-card-1 card">Romance</div>
            <div class="mini-card-2 card">Científico</div>
          </div>
          <div class="column">
            <div class="mini-card-1 card">Conto</div>
            <div class="mini-card-2 card">Infantis</div>
          </div>
          <div class="button">
            <button class="categoriaBtn">></button>
          </div>
        </div>
      </div>
      <!-- Escolha por Categoria-fim -->

      <br><br><br><br>

      <!-- Gosta de alguns autores -->
    <h3 class="autores">Gosta de alguns autores ?</h3>
    <div class="autores">
      <div class="alguns-autores">
        <img src="./img/autor-1.jpg" alt="autor-1">
      </div>
      <div class="alguns-autores">
        <img src="./img/autor-2.jpg" alt="autor-2">
      </div>
      <div class="alguns-autores">
        <img src="./img/autor-3.webp" alt="autor-3">
      </div>
      <div class="alguns-autores">
        <img src="./img/autor-4.jpg" alt="autor-4">
      </div>
      <div class="alguns-autores">
        <img src="./img/autor-5.avif" alt="autor-5">
      </div>
    </div>
    <!-- Gosta de alguns autores-fim -->

        <br><br>

    <!-- Lançamentos em Literatura -->
    <h3 class="lancamentos">Lançamentos em Literatura</h3>
    <br><br>
    <div class="lancamentos">
      <div class="card cards" aria-hidden="true" style="min-height: 384px;">
        <img src="./img/book-1.jpg" class="card-img-top" alt="Foto do Livro">
        <div class="card-body">
          <h5 class="card-title">Nome do Livro</h5>
          <p class="card-text">Preco</p>
        </div>
      </div>
      <div class="card cards" aria-hidden="true" style="min-height: 384px;">
        <img src="./img/book-2.jpg" class="card-img-top" alt="Foto do Livro">
        <div class="card-body">
          <h5 class="card-title">Nome do Livro</h5>
          <p class="card-text">Preco</p>
        </div>
      </div>
      <div class="card cards" aria-hidden="true" style="min-height: 384px;">
        <img src="./img/book-3.jpg" class="card-img-top" alt="Foto do Livro">
        <div class="card-body">
          <h5 class="card-title">Nome do Livro</h5>
          <p class="card-text">Preco</p>
        </div>
      </div>
      <div class="card cards" aria-hidden="true" style="min-height: 384px;">
        <img src="./img/book-4.jpg" class="card-img-top" alt="Foto do Livro">
        <div class="card-body">
          <h5 class="card-title">Nome do Livro</h5>
          <p class="card-text">Preco</p>
        </div>
      </div>

      <div class="card cards" aria-hidden="true" style="min-height: 384px;">
        <img src="./img/book-5.jpg" class="card-img-top" alt="Foto do Livro">
        <div class="card-body">
          <h5 class="card-title">Nome do Livro</h5>
          <p class="card-text">Preco</p>
        </div>
      </div>
    </div>
    <!-- Lançamentos em Literatura-fim -->
  </main>
  <footer>
    <p>Footer</p>
  </footer>
</body>
</html>