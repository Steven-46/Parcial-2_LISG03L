<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/parcial.css">
	<title>Biblioteca</title>
</head>
<body class="row justify-content-center" style="background-color: #1B3FFF;">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #141E4F;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/Universidad_don_bosco.jpg" alt="logo_udb" style="width: 50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Idiomas.php">Ejercicio_1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Biblioteca.php">Ejercicio_2</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<div style="background-color: #22317D; color: white; font-family: Verdana;">
<header class="col-sm-8 container">
	<div class="jumbotron">
		<h1 class="display-4 text-center">Biblioteca</h1>
	</div>
</header></div>
<div><br></div>
<form method="POST" action="CalculoP.php">
	<div class="col-sm-6 container">
	<div class="card" style="width: 45rem;">
		<div class="card-body">
		<h5 class="card-title">Informaci??n del libro</h5>
		<div class="row">
		<div class="col">
			<div class="form-floating col-sm-12">
			  <input type="text" class="form-control" id="autor" name="autor">
			  <label for="floatingInput">Nombre:</label>
			</div>
		</div>
		<div class="col">
			<div class="form-floating col-sm-12">
			  <input type="text" class="form-control" id="titulo" name="titulo">
			  <label for="floatingInput">T??tulo del libro:</label>
			</div>
		</div>		
		</div><br>
		<div class="row">
		<div class="col">
			<div class="form-floating col-sm-12">
			  <input type="numberOnly" class="form-control" id="nedicion" name="nedicion">
			  <label for="floatingInput">N??mero de edici??n:</label>
			</div>
		</div>
		<div class="col">
			<div class="form-floating col-sm-12">
			  <input type="text" class="form-control" id="lpublicacion" name="lpublicacion">
			  <label for="floatingInput">Lugar de publicaci??n:</label>
			</div>
		</div>		
		</div><br>
		<div class="row">
		<div class="col">
			<div class="form-floating col-sm-12">
			  <input type="text" class="form-control" id="editorial" name="editorial">
			  <label for="floatingInput">Editorial:</label>
			</div>
		</div>
		<div class="col">
			<div class="form-floating col-sm-12">
			  <input type="numberOnly" class="form-control" id="aedicion" name="aedicion">
			  <label for="floatingInput">A??o de la edici??n:</label>
			</div>
		</div>		
		</div><br>
		<div class="row">
		<div class="col">
			<div class="form-floating col-sm-12">
			  <input type="numberOnly" class="form-control" id="npaginas" name="npaginas">
			  <label for="floatingInput">N??mero de p??ginas:</label>
			</div>
		</div>
		<div class="col">
			<div class="form-floating col-sm-12">
			  <input type="text" class="form-control" id="notas" name="notas">
			  <label for="floatingInput">Notas:</label>
			</div>
		</div>		
		</div><br>
		<div class="row">
		<div class="col">
			<div class="form-floating mb-3">
			  <input type="text" class="form-control" id="isbn" name="isbn">
			  <label for="floatingInput">ISBN:</label>
			</div>
		</div>
		</div><br>
		<div class="row">
		<div class="col d-grid gap-2 col-6 mx-auto">
			<button value="Enviar" name="enviar" id="enviar" class="btn btn-outline-primary">Agregar</button>
		</div>
		</div><br>
		</div>
	</div>
</div>
<br><br>
</form>

<footer style="background-color: #22317D; color: white; font-family: Verdana;"><br><br>
	<div class="jumbotron text-center">
		<img src="img/Universidad_don_bosco.jpg" alt="logo_udb" style="width: 50px;"><br>
		<h6>Universidad Don Bosco - 2021</h6>
		<h6>Steven Alfonso Margueis Ramos - MR161348</h6><br><br>
	</div>
</footer>
</body>
</html>