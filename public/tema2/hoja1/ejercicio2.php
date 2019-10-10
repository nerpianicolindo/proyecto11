<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio2.php</title>
</head>
<body>
	<p>Dada una temperatura en grados Celsius, convertirla a Fahrenheit, mostrando por pantalla un mensaje del tipo "xxx.xx grados Celsius son yyy.yy grados Fahrenheit”</p>

	<?php
	echo 'ejercicio 2' . '<br>';
	$temperatura = (30.5 * 9/5) + 32;
	echo "30.50 grados celsius son " . number_format($temperatura, 2, '.', ',') . " grados Fahrenheit"
?>
<br/><a href="http://proyecto11.local/tema2/hoja1/">Volver</a>
</body>
</html>

