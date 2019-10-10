<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6.php</title>
</head>
<body>
	<p>Escribir un programa que calcule el número de billetes de 500, 200, 100, 50, 20, 10 y 5 así como de monedas de 2, 1, 0'5, 0'20, 0'10, 0'05, 0'02 y 0'01 para desglosar una cantidad C de forma que se necesite la menor cantidad de cada tipo.</p>
	<form action = "ejercicio6.php" method = "get">
	Introduzca una cantidad de dinero<input type="text" name="dinero"/>
	<input type="submit" name="enviar"/>
	</form>

	<?php
		$dinero = $_GET['dinero'];
		echo "La cantidad introducida es " . $dinero . " y necesitas: ";
		echo "<br/>" . intdiv($dinero, 500) . " billetes de 500";
		$dinero = $dinero%500;
		echo "<br/>" . intdiv($dinero, 200) .  " billetes de 200";
		$dinero = $dinero%200;
		echo "<br/>" . intdiv($dinero, 100) . " billetes de 100";
		$dinero = $dinero%100;
		echo "<br/>" . intdiv($dinero, 50) . " billetes de 50";
		$dinero = $dinero%50;
		echo "<br/>" . intdiv($dinero, 20) . " billetes de 20";
		$dinero = $dinero%20;
		echo "<br/>" . intdiv($dinero, 10) . " billetes de 10";
		$dinero = $dinero%10;
		echo "<br/>" . intdiv($dinero, 5) . " billetes de 5";
		$dinero = $dinero%5;
		echo "<br/>" . intdiv($dinero, 2) . " monedas de 2";
		$dinero = $dinero%2;
		echo "<br/>" . intdiv($dinero, 1) . " monedas de 1";
		echo "<br/>". $dinero;
		$dinero = $dinero%1;
		$dinero = $dinero*100;
		echo "<br/>". $dinero;
		echo "<br/>" . intdiv($dinero, 500) . " monedas de 0.5";
		$dinero = $dinero%500;
		echo "<br/>" . intdiv($dinero, 200) . " monedas de 0.2";
		$dinero = $dinero%200;
		echo "<br/>" . intdiv($dinero, 100) . " monedas de 0.1";
		$dinero = $dinero%100;
		echo "<br/>" . intdiv($dinero, 50) . " monedas de 0.05";
		$dinero = $dinero%50;
		echo "<br/>" . intdiv($dinero, 20) . " monedas de 0.02";
		$dinero = $dinero%20;
		echo "<br/>" . intdiv($dinero, 10) . " monedas de 0.01";
		
	?> 
<a href="http://proyecto11.local/tema2/hoja1/">Volver</a>
</body>
</html>
