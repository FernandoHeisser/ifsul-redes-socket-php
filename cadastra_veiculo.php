<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastra Veículo</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="pesquisar.php">Pesquisar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cadastrar Veiculo</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Cadastra Veículo</h2>
      </div>
      <div class="row" style="margin-left: 25%;">
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" name="form" method="post" action="client.php" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="modelo">Marca</label>
                <input type="text" class="form-control" name="modelo" id="firstName" placeholder="Volkswagen" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="marca">Modelo</label>
                <input type="text" class="form-control" name="marca" id="lastName" placeholder="Gol" value="" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="versao">Versão</label>
              <input type="text" class="form-control" name="versao" id="email" placeholder="LTE 2.0" required>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="ano">Ano</label>
                <input type="number" class="form-control" name="ano" id="country" max="2018" min="1970" placeholder="1970-2018" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="cor">Cor</label>
                <input type="text" class="form-control" name="cor" id="email" placeholder="" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="kilo">Kilometragem</label>
                <input type="number" class="form-control" name="kilo" id="zip" placeholder="" required>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018 Fernando Heisser</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>