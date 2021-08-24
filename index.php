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
                        <img src="images/logo.png" class="me-1" width="50px" >

                        <a class="navbar-brand" href="index.php">Doce Sabor</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Navbar-topo" aria-controls="Navbar-topo" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="Navbar-topo">
                            
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/quem_somos.php">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/pages/fale_conosco.php">Fale Conosco</a>
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
    <div id="myCarousel" class="carousel slide pt-5" data-bs-ride="carousel">
    <div class="carousel-indicators pt-5">
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
            <p><a class="btn btn-lg btn-primary" href="#">Veja Mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="images/slide2.png" class="d-block w-100 " alt="...">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Another example 2.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Veja Mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="images/slide3.png" class="d-block w-100" alt="...">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good 3</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Veja Mais</a></p>
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

		include_once("dados/dados.php");
		$i = 0;
		foreach($dados as $dado){
      $i++;
			print '<div class="col-lg-4 ">';
    	print '<img src="images/mkt'.$i.'.png" width="140px" height="140px"';
			echo "<br><h6> Cod.: ".$dado["codigo"]. "</h6>";
			echo '<h2 class="h2">'.$dado["produto"]. "</h2>";
			echo "<p>".$dado["descricao"]. "</p>";
			echo '<p class="h5"> R$'.$dado["preco"]. "</p>";
			print '<p><a class="btn btn-secondary" href="#">Veja Mais &raquo;</a></p>';
			print	"</div><!-- /.col-lg-4 -->";
		};
				



	?>
</div>
</main>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted"> Deyvson Felipe Pereira de Assis - 20087483-5<br>SISTEMAS PARA INTERNET - UNICESUMAR <br> Campina Grande/PB 2021 <br> BackEnd I</p>


    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <img src="/images/logo.png" alt="" width="100px">
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Início</a></li>
      <li class="nav-item"><a href="pages/quem_somos.php" class="nav-link px-2 text-muted">Quem Somos</a></li>
      <li class="nav-item"><a href="pages/fale_conosco.php" class="nav-link px-2 text-muted">Fale Conosco</a></li>
    </ul>
  </footer>

   
	 
	 
	 
	 
	 
	  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>