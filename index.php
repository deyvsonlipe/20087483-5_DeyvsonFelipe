<!doctype html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>
    Doce Sabor
  </title>
</head>

<body>
  <header>
    <div class="container mx-auto">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" aria-label="Eleventh navbar">
        <div class="container-fluid">
          <img src="images/logo.png" class="me-1" width="50px">

          <a class="navbar-brand" href="#">Doce Sabor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Navbar-topo" aria-controls="Navbar-topo" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="Navbar-topo">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/quem_somos.php">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/fale_conosco.php">Fale Conosco</a>
              </li>
            </ul>
            <form>
              <input class="form-control w-3" type="text" placeholder="Search" aria-label="Search">
            </form>
          </div>
        </div>
      </nav>
    </div>


  </header>
  <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner   ">
        <div class="carousel-item active">
          <img src="images/slide1.png" class="d-block w-100" alt="...">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Example 1</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide2.png" class="d-block w-100 " alt="...">

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Another example 2.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide3.png" class="d-block w-100" alt="...">

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good 3</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container marketing text-center" id="produtos">

      <!-- Three columns of text below the carousel -->
      <div class="row mt-5">
        <p class="display-5  text-start">Produtos</p>
        <?php
          require_once("dados/dados.php");
          $i = 0;

          $cont = sizeof($dados);


          foreach ($dados as &$dado) {
            $i++;
            print '<div class="col-lg-4 pt-3 f">';
            print '<img src="../images/mkt1.png" alt="">';


            foreach ($dado as $conteudo) {
              #print "<h5>Cod.:" . $dados["codigo"]. "</h5>";
              print $conteudo;
              #print "<p>" . $conteudo . "</p>";

            };
            print '<p><a class="btn btn-secondary" href="#">Veja mais &raquo;</a></p>';
            print "</div>";
          };


        ?>
      </div>




  </main>
  <footer >

    <p class="h5 text-center text-muted border-top"> Deyvson Felipe Pereira de Assis</p>
    <p class="h5 text-center text-muted">SISTEMAS PARA INTERNET - UNICESUNAR</p>
    <p class="h5 text-center text-muted">SISTEMAS PARA INTERNET</p>
    <p class="h5 text-center text-muted">&copy; 2021  </p>
  </footer>






  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>