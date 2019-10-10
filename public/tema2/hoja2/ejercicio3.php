<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
	<p>Escribir un programa que calcule las raíces, bien reales o imaginarias, de una ecuación de segundo grado. El programa también debe ser capaz de operar con valores nulos para el coeficiente de orden 2.</p>
	<form action = "ejercicio3.php" method = "get">
	Introduzca un numero en base 2 <input type="text" name="a"/>
	<br/>Introduzca un numero en base 1 <input type="text" name="b"/>
	<br/>Introduzca un termino independiente <input type="text" name="c"/>
	<input type="submit" name="enviar"/>
	</form>



	<?php
		include 'funciones.php';  
		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $_GET['c'];

		echo ecuacion($a, $b, $c);
		include 'footer.php';
	?>

</body>
</html>