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

	<h3>Resultado</h3>
	<table>
		<thead>
			<th>Numero</th>
			<th>Cuadrado</th>
			<th>Cubo</th>
		</thead>
		<tbody>
			<?php 
				$numero = $_GET['numero'];
				for ($i=1; $i<6; $i++) : ?>
			<tr>
				<td><?= $numero+$i ?></td>
				<td><?= pow($numero+$i, 2) ?></td>
				<td><?= pow($numero+$i,3) ?></td>
			</tr>
			<?php endfor ?>
		</tbody>
	</table>
	<br/><a href="http://proyecto11.local/tema2/hoja1/">Volver</a>
</body>
</html>