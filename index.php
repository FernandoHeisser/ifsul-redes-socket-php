<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="form-validation.css" rel="stylesheet">
</head>
<body style="background-image: url(p1.jpg); background-size: 100%;">
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
            <a class="nav-link" href="cadastra_veiculo.php">Cadastrar Veiculo</a>
          </li>
        </ul>
      </div>
    </nav>   	
    <?php 
		if(isset($_COOKIE['mensagem']))
		echo "<div class='container' style='background: rgba(255, 132, 69, 0.2); color: white; margin-top: 30px; width: auto; float: left; margin-left: 50px;'><p style='padding: 5px; padding-top: 8px;'>".$_COOKIE['mensagem']."</p></div>";
    ?>
</body>
</html>