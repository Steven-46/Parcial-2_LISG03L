<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/parcial.css">
	<title>Biblioteca</title>
</head>
<body class="resultados">

<div class="container"><br>
<?php ini_set("memory_limit", "16MB"); error_reporting(0);
if(isset($_POST['enviar'])):
	//Captura de datos
	$autor = $_POST['autor'];
	$titulo = $_POST['titulo'];
	$nedicion = is_numeric($_POST['nedicion']) ? $_POST['nedicion'] : null;
	$lpublicacion = $_POST['lpublicacion']; 
	$editorial = $_POST['editorial']; 
	$aedicion = is_numeric($_POST['aedicion']) ? $_POST['aedicion'] : null;
	$npaginas = is_numeric($_POST['npaginas']) ? $_POST['npaginas'] : null;
	$notas = $_POST['notas'];
	$isbn = $_POST['isbn'];

	//Validaciones
	if($autor == "" || $titulo == ""|| !is_numeric($nedicion) || $lpublicacion == "" || $editorial == "" || !is_numeric($aedicion) || !is_numeric($npaginas) || $notas == "" || $isbn == ""):
		echo "<div class=\"alert alert-warning\" role=\"alert\">";
		echo "No ingreso todos los valores necesarios<br>";
		echo "<p><a href=\"Biblioteca.php\" >Volver a intentarlo</a>";
		echo "</div>";
	else:	
		//Incluyendo el archivo de la clase
		function __autoload($classname){
			include_once($classname . ".class.php");
		}
		$movil[0] = new biblioteca();
		/*Creando los objetos*/
		array_push($movil, new biblioteca($autor, $titulo, $nedicion, $lpublicacion, $editorial, $aedicion, $npaginas, $notas, $isbn));
		
		/*Esta llamada mostrara los valores por defecto en los
		argumentos del metodo constructor*/
		
		//Mostrando la tabla con los autos disponibles
		echo "<table class=\"table table-bordered table-responsive\">\n";
		echo "\t<tr class=\"table-dark\">\n\t\t<th style=\"text-align: center;\">\n\t\t\tAutor\n\t\t</th>\n\t\n\t\t<th style=\"text-align: center;\">\n\t\t\tTítulo del libro\n\t\t</th>\n\t\t<th style=\"text-align: center;\">\n\t\t\tEdición\n\t\t</th>\n\t\t<th style=\"text-align: center;\">\n\t\t\tLugar de publicación\n\t\t</th>\n\t\t<th style=\"text-align: center;\">\n\t\t\tEditorial\n\t\t</th>\n\t\t<th style=\"text-align: center;\">\n\t\t\tEdición\n\t\t</th>\n\t\t<th style=\"text-align: center;\">\n\t\t\tPáginas\n\t\t</th>\n\t\t<th style=\"text-align: center;\">\n\t\t\tNotas\n\t\t</th>\n\t\t<th style=\"text-align: center;\">\n\t\t\tISBN\n\t\t</th>\n\t</tr>\n";	
		for($i = 0; $i < count($movil); $i++){
			$movil[$i]->mostrar();
		}
		echo "</table>\n</div>\n";
		echo "<div class=\"row\">\n";
		echo "\t<div class=\"col d-grid gap-2 col-6 mx-auto\">\n";
		echo"\t<a href=\"Biblioteca.php\" role=\"button\" class=\"btn btn-primary\">Agregar otro libro</a>\n";
		echo"</div>";
	endif;	
endif;
?>
</div>
<br><br>
<footer style="background-color: #22317D; color: white; font-family: Verdana;"><br><br>
	<div class="jumbotron text-center">
		<img src="img/Universidad_don_bosco.jpg" alt="logo_udb" style="width: 50px;">
		<h6>Universidad Don Bosco - 2021</h6>
		<h6>Steven Alfonso Margueis Ramos - MR161348</h6><br><br>
	</div>
</footer>
</body>
</html>