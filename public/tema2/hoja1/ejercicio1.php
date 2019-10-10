<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio1.php</title>
</head>
<body>
	<p>Dado un valor en pesetas, convertirlo a euros. La solución deberá tener dos decimales.</p>
	<?php  
	echo 'ejercicio 1' . '<br>';
	$peseta = 1000/166.386;
	echo "1000 pesetas son " . number_format($peseta, 2,'.',',') . " euros";
	?>
	<br/><a href="http://proyecto11.local/tema2/hoja1/">Volver</a>
</body>
</html>

