<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 5</title>
</head>
<body>
	<p>Escribir un programa que pregunte el año actual y la edad de una persona y calcule la edad de esa persona en el año 2020.</p>
	<form action = "ejercicio5.php" method = "get">
		Introduzca el año actual<input type="text" name="year"/>
		Introduzca su edad<input type="text" name="age"/>
		<input type="submit" name="enviar"/>
	</form>
	<?php 
	$año = $_GET['year'];
	$edad = $_GET['age'];
	$res = 2020 - $año + $edad;
	echo "La edad que tendra en 2020 es de " . $res;

?>

	<br/><a href="http://proyecto11.local/tema2/hoja1/">Volver</a>
</body>
</html>


