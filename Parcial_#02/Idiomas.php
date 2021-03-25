<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/parcial.css">
	<title>Idiomas</title>
</head>
<body class="row justify-content-center" style="background-color: #1B3FFF;">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #141E4F;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/Universidad_don_bosco.jpg" alt="logo_udb" style="width: 50px;"></a></a>
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
<header class="col-sm-6 container">
	<div class="jumbotron">
		<h1 class="display-4 text-center">Academia de idiomas</h1>
	</div>
</header></div>
<div><br></div>
<form method="POST">
	<div class="col-sm-6 container">
	<div class="card" style="width: 45rem;">
		<div class="card-body">
		<h5 class="card-title">Seleccionar idioma</h5>
			<div class="form">
				<select class="form-select col-sm-8" aria-label="Default select example" id="idioma" name="idioma">
				  <option value="1">Ingles</option>
				  <option value="2">Frances</option>
				  <option value="3">Aleman</option>
				  <option value="4">Ruso</option>
				  <option value="5">Chino Mardarin</option>
				</select><br>
			</div>
		</div><br>
			<?php 
				$idiomas = array(
				array("Inglés", 25, 15, 10),
				array("Francés", 10, 5, 2),
				array("Alemán", 8, 4, 1),
				array("Ruso", 12, 8, 4),
				array("Chino Mandarin", 30, 15, 10)
			);
				echo "<div class='col-sm-12 container'>";
				echo "<table class='table table-bordered'>";
				echo "<thead>";
				if (isset($_POST['enviar'])){
					$idioma = $_POST['idioma'];
					if ($idioma == 1){
						echo "<tr class='bg-success' align='center'>";
						echo "<th colspan='2'>";
						echo $idiomas[0][0];
						echo "</th>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Básico</td>";
						echo "	<td>".$idiomas[0][1]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Intermedio</td>";
						echo "	<td>".$idiomas[0][2]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Avanzado</td>";
						echo "	<td>".$idiomas[0][3]."</td>";
						echo "</tr>";
					}
					if ($idioma == 2){
						echo "<tr class='bg-success' align='center'>";
						echo "<th colspan='2'>";
						echo $idiomas[1][0];
						echo "</th>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Básico</td>";
						echo "	<td>".$idiomas[1][1]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Intermedio</td>";
						echo "	<td>".$idiomas[1][2]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Avanzado</td>";
						echo "	<td>".$idiomas[1][3]."</td>";
						echo "</tr>";
					}
					if ($idioma == 3){
						echo "<tr class='bg-success' align='center'>";
						echo "<th colspan='2'>";
						echo $idiomas[2][0];
						echo "</th>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Básico</td>";
						echo "	<td>".$idiomas[2][1]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Intermedio</td>";
						echo "	<td>".$idiomas[2][2]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Avanzado</td>";
						echo "	<td>".$idiomas[2][3]."</td>";
						echo "</tr>";
					}
					if ($idioma == 4){
						echo "<tr class='bg-success' align='center'>";
						echo "<th colspan='2'>";
						echo $idiomas[3][0];
						echo "</th>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Básico</td>";
						echo "	<td>".$idiomas[3][1]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Intermedio</td>";
						echo "	<td>".$idiomas[3][2]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Avanzado</td>";
						echo "	<td>".$idiomas[3][3]."</td>";
						echo "</tr>";
					}
					if ($idioma == 5){
						echo "<tr class='bg-success' align='center'>";
						echo "<th colspan='2'>";
						echo $idiomas[4][0];
						echo "</th>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Básico</td>";
						echo "	<td>".$idiomas[4][1]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Intermedio</td>";
						echo "	<td>".$idiomas[4][2]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td>Avanzado</td>";
						echo "	<td>".$idiomas[4][3]."</td>";
						echo "</tr>";
					}
				}
				/*echo "<tr class='bg-success'>";
				echo "	<th scope='col'>Nombre</th>";
				echo "	<th scope='col'>Nota</th>";
				echo "</tr>";*/

					/*foreach($materias as $materia => $notas){
						foreach($notas as $nombre => $nota){
							echo "<tr>";
							echo "	<td>".$nombre."</td>";
							echo "	<td>".$nota."</td>";
							echo "</tr>";
						}
						//Obtener la suma total de las notas entre el toal de notas
					}	//en la materia procesada actualmente*/

				echo "</tbody>";
				echo "</table>";
				?>
				<div style="text-align: center;">
				<input type="submit" class="btn btn-success" value="Mostrar alumnos" id="enviar" name="enviar">
				</form>
				<?php
				echo "</div>";				
				echo "</div>";
			?>
	<br></div><br>
	</div>
<br><br><br><br>
</form>

<footer style="background-color: #22317D; color: white; font-family: Verdana;"><br><br>
	<div class="jumbotron text-center">
		<img src="img/Universidad_don_bosco.jpg" alt="logo_udb" style="width: 50px;">
		<h6>Universidad Don Bosco - 2021</h6>
		<h6>Steven Alfonso Margueis Ramos - MR161348</h6><br><br>
	</div>
</footer>

</body>
</html>