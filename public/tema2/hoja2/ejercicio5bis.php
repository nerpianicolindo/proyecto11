<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5 bis</title>
</head>
<body>
	<p>La fecha de cualquier Domingo de Pascua se calcula de la siguiente forma:

    Sea X el año para el que quiere calcularse la fecha.
    Sea A el resto de la división de X entre 19
    Sea B el resto de la división de X entre 4
    Sea C el resto de la división de X entre 7
    Sea D el resto de la división de (19*A+24) entre 30
    Sea E el resto de la división de (2B+4C+6D+5) entre 7

La fecha para el Domingo de Pascua es el día (22+D+E) de Marzo (tener en cuenta que puede ser de Abril).

Escribir un programa que dado un año obtenga por pantalla la fecha del Domingo de Pascua de ese año.</p>

	<form action = "ejercicio5.php" method = "get">
	<p>Introduzca el año que se quiere calcular</p><input type="text" name="x"/>
	<input type="submit" name="enviar"/>
	</form>
	<br/>

	<?php  
	//Se escribe esto para que se pueda acceder a las funciones dentro del fichero funciones.php
	include "funciones.php";

	$x = $_GET['x'];

	$dia = calcularDia($x);

	if ($dia > 31) {
		echo 'El domingo de pascua de ' . $x . ' corresponde al ' . ($dia-31) . ' de abril';
	} else {
		echo 'EL domingo de pascua de ' . $x . ' corresponde al '. $dia . ' de Marzo';
	}

	include "footer.php";

	?>

</body>
</html>