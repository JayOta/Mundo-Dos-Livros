<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Mundo dos Livros</title>
</head>
<body>
    <header>
            <!-- Colocar o negocio de pesquisa aqui -->
        <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" style="display: flex; margin-left: 33.5em; font-size: 19px;">Mundo dos Livros</a>
    <form class="d-flex" role="search" style="display: flex; margin-right: 560px;">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 400px; height: 37px;">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    </header>
    <main>
        <!-- Colocar o principal aqui -->

        <!-- Carousel -->
        <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/carousel-book.jpg" class="d-block" alt="Carousel" width="100%" height="450px" style="background-size: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h2>Conheça o Mundo dos Livros</h2>
        <p>Novos lançamentos toda semana!</p>
      </div>
    </div>
  </div>
</div>
        <!-- Carousel-fim -->

        <!-- Escolha por Categoria -->
        <br><br>

<h3>Escolha por Categoria</h3>
<div class="por-categoria card" style="display: flex; margin-left: 500px; height: 250px; width: 380px; background: #4f759b; color: #fff; box-shadow: 0px 0px 3px #000;">
  <div class="mini-cards" style="display: flex; flex-direction: row; margin-left: 500px; justify-content: space-evenly;">
    <div class="column" style="display: flex; flex-direction: column; position: relative; right: 80px;">
      <div class="mini-card card" style="box-shadow: 0px 0px 3px #000; height: 110px; width: 250px; margin-bottom: 6px; background: #4f759b; color: #fff; font-size: 25px; display: flex; justify-content: center; align-items: center;">Romance</div>
      <div class="mini-card card" style="box-shadow: 0px 0px 3px #000; height: 110px; width: 250px; margin-top: 20px; background: #4f759b; color: #fff; font-size: 25px; display: flex; justify-content: center; align-items: center;">Científico</div>
     </div>
    <div class="column" style="display: flex; flex-direction: column; position: relative; right: 40px;">
      <div class="mini-card card" style="box-shadow: 0px 0px 3px #000; height: 110px; width: 250px; margin-bottom: 6px; background: #4f759b; color: #fff; font-size: 25px; display: flex; justify-content: center; align-items: center;">Conto</div>
      <div class="mini-card card" style="box-shadow: 0px 0px 3px #000; height: 110px; width: 250px; margin-top: 20px; background: #4f759b; color: #fff; font-size: 25px; display: flex; justify-content: center; align-items: center;">Infantis</div>
    </div>
    <div class="button">
      <button class="categoriaBtn" style="height: 250px; border: 1px solid #1e293b; border-radius: 4px; background: #ccd7e2; font-weight: bold; font-size: 20px; position: relative; right: 10px;">></button>
    </div>
  </div>
</div>
        <br><br>
        <!-- Gosta de alguns autores -->
<h3>Gosta de alguns autores</h3>
<div class="alguns-autores">

</div>
        <!-- Gosta de alguns autores-fim -->

        <br><br>

<!-- Lançamentos em Literatura -->
<h3>Lançamentos em Literatura</h3>
<br><br>
<div class="card" aria-hidden="true" style="width: 250px;">
  <img src="..." class="card-img-top" alt="..." width="150px" height="150px">
  <div class="card-body">
    <h5 class="card-title placeholder-glow">
      <span class="placeholder col-6"></span>
    </h5>
    <p class="card-text placeholder-glow">
      <span class="placeholder col-7"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-6"></span>
      <span class="placeholder col-8"></span>
    </p>
    <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
  </div>
</div>
<!-- Lançamentos em Literatura-fim -->
    </main>
    <section></section>
</body>
</html>