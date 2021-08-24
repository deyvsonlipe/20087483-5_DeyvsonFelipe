<!doctype html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>
    Fale Conosco
  </title>
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
                <a class="nav-link active" href="fale_conosco.php">Fale Conosco</a>
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


    <div id="fale_conosco pt-5 border border-warning">

      <div class="text-start pt-5 ">
        <p class="display-5  text-start pt-3 ms-2">Fale Conosco</p>

      </div>

      <div class=" w-50 p-3 float-start">

        <form>
          <div class="form-row ms-5">
            <div class="form-group col-md-6">
              <label for="inputname">Nome</label>
              <input type="name" class="form-control" id="inputname" placeholder="Fulano de Tal">

              <label for="inputtelefone">Telefone</label>
              <input type="telefone" class="form-control" id="inputtelefone" placeholder="88 95555-5555">

              <label for="inputemail">Email</label>
              <input type="email" class="form-control" id="inputemail" placeholder="email@example.com">

              <div class="form-floating pt-2">
                <textarea class="form-control" placeholder="Escreva sua mensagem aqui..." id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Mensagem</label>
              </div>

              <div class="pt-2">
                <button type="submit" class="btn btn-primary ">Sign in</button>
              </div>
            </div>

          </div>
        </form>
      </div>
      <div class="float-end w-50 p-3">
        <div class="text-start">
          <p class="h6">Localização:</p>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7916.507965170778!2d-35.89037144018976!3d-7.211841012254269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x26c7e4831695edb6!2sUniCesumar%20-%20Campina%20Grande!5e0!3m2!1spt-BR!2sbr!4v1629157362928!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>
    <div class="float-none ">
      .
    </div>

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




  </main>












  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>