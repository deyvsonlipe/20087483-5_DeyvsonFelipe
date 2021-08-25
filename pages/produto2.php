<!doctype html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


<?php
	include_once("../dados/dados.php");
  
  print  "<title>DS-".$dados[1]["produto"]."</title>";
?>
</head>

<body>
  <header>
    <div class="container mx-auto">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" aria-label="Eleventh navbar">
        <div class="container-fluid">
          <img src="../images/logo.png" class="me-1" width="50px">

          <a class="navbar-brand" href="../index.php">Doce Sabor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Navbar-topo" aria-controls="Navbar-topo" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="Navbar-topo">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quem_somos.php">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fale_conosco.php">Fale Conosco</a>
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
    <div class="text-start pt-5 ">
			<?php
				include_once("../dados/dados.php");
 				print  '<p class="display-5  text-start pt-3 ms-2">'.$dados[1]['produto'].'</p>';
			?>
    </div>
    <div class=" d-flex flex-column">

      <div class="d-flex flex-row">
        <img src="../images/mkt2.png" width="500px" class="rounded mx-auto d-block">
      </div>

      <div class="d-flex flex-row m-3">
        <?php
					include_once("../dados/dados.php");
					print  '<p>'.$dados[1]['descricao'].'</p>';
				?>


      </div>

      <div class="mx-auto m-3">
        <div class="float-start">
          <img src="../images/mkt2.png" width="250px" class="rounded m-3">
          </div>
        <div class="float-start">
          <img src="../images/mkt2.png" width="250px" class="rounded m-3">
          </div>

        <div class="float-start">
          <img src="../images/mkt2.png" width="250px" class="rounded m-3">
        </div>
        

      </div>
      <?php
                include_once("../dados/dados.php");
                print  '<h2 class="mx-auto text-danger"> R$' . $dados[1]['preco'] . '</h2>';

                ?>
            <div class="pt-2 mx-auto">
                <a class="btn btn-warning btn-lg" href="fale_conosco.php" role="button">Comprar</a>
            </div>

    </div>

  </main>
  
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted"> Deyvson Felipe Pereira de Assis - 20087483-5<br>SISTEMAS PARA INTERNET - UNICESUMAR <br> Campina Grande/PB 2021 <br> BackEnd I</p>


    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <img src="/images/logo.png" alt="" width="100px">
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="../index.php" class="nav-link px-2 text-muted">Início</a></li>
      <li class="nav-item"><a href="quem_somos.php" class="nav-link px-2 text-muted">Quem Somos</a></li>
      <li class="nav-item"><a href="fale_conosco.php" class="nav-link px-2 text-muted">Fale Conosco</a></li>
    </ul>
  </footer>






  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>
