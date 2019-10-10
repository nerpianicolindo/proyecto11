<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio3.php</title>
</head>
<body>
	<p>Dado el radio de una circunferencia, calcular su longitud así como su área.</p>

	<?php  
	echo 'ejercicio 3' . '<br>';
	$radio = 10;
	$circunferencia = 2 * pi() * $radio;
	$area = pi() * pow($radio,2);
	echo "Una circunferencia de radio 10 es de ". number_format($circunferencia, 2, '.', ',') . ", y su area es de " . number_format($area, 2);
?>
<br/><a href="http://proyecto11.local/tema2/hoja1/">Volver</a>
</body>
</html>


