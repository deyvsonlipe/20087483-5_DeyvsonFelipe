<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>
			DS -  Contato
	</title>
  </head>
  <body>
  <header>
    <div class="container mx-auto">
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" aria-label="Eleventh navbar">
                    <div class="container-fluid">
                        <img src="images/logo.png" class="me-1" width="50px" >

                        <a class="navbar-brand" href="#">Doce Sabor</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Navbar-topo" aria-controls="Navbar-topo" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="Navbar-topo">
                            
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../index.php">Início</a>
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

<div class="border border-warning w-50 ">
<div class="col-md-7 col-lg-8 p-5">
        <h4 class="mb-3 pt-5">Billing address</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>
</div>
</div>




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