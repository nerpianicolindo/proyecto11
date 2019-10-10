<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio4.php</title>
</head>
<body>
	<p>Crear un programa que calcule la fuerza de atracción gravitacional entre dos masas M1 y M2 situadas a una distancia R, donde las masas se expresan en kilogramos y la distancia en metros y la constante de gravitación universal es G=6.67x10^(-11) Nw*m^2/Kg^2</p>

	<?php 
	echo 'ejercicio 4<br>';
	$masa1 = 10;
	$masa2 = 20;
	$const = 6.67*pow(10, -11);
	echo "La fuerza de atraccion entre la primera masa de " . $masa1 . " kg, y la segunda masa de " . $masa2 . " es de " . $const * ($masa1 + $masa2)/pow(5, 2);
	
?>
<br/><a href="http://proyecto11.local/tema2/hoja1/">Volver</a>
</body>
</html>


