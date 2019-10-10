<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio8.php</title>
</head>
<body>
	<p>Mostrar en una tabla el cuadrado y el cubo de los cinco primeros números enteros que siguen a uno previamente introducido. Los datos deben aparecer encolumnados.</p>

	<form action = "ejercicio8.php" method = "get">
	Introduzca un numero entero<input type="text" name="numero"/>
	<input type="submit" name="enviar"/>
	</form>
	<?php  
	$numero = $_GET['numero'];
	echo "Entero-----Cuadrado-----Cubo<br/>";
	$aux = $numero+1;
	for ($i=0; $i < 5; $i++) { 
		$cuadrado = pow($aux, 2);
		$cubo = pow($aux, 3);
		echo $aux . "     " . $cuadrado . "     " . $cubo;
		$aux++;	
		echo "<br/>";
	}

	?>
	<br/><a href="http://proyecto11.local/tema2/hoja1/">Volver</a>
</body>
</html>