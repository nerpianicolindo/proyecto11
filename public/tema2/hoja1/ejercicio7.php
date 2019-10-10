<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio7.html</title>
</head>
<body>
	<p>Crear un programa que pida un número real y muestre la tabla de multiplicar correspondiente a dicho número perfectamente formateada y con una precisión de dos dígitos.</p>
	<form action = "ejercicio7.php" method = "get">
	Introduzca un numero real<input type="text" name="numero"/>
	<input type="submit" name="enviar"/>
	</form>

	<?php
		$numero = $_GET['numero'];

		if ($numero != NULL) {
			for ($i=0; $i <=10 ; $i++) { 
				$aux = $numero * $i;
				echo $numero . " multiplicado por " . $i ." es igual a " . number_format($aux, 2) . "<br/>";
			}
		}
	?>
	<br/><a href="http://proyecto11.local/tema2/hoja1/">Volver</a>

</body>
</html>