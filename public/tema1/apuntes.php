<?php ini_set('display_errors', 1);?>
<h1>Esta es mi primera pagina web</h1>

<?php
	$soyvariable = "Pepe Pérez";
	echo $soyvariable;
?>

<h4>Soy otra etiqueta</h4>

<?php
	$yo = ' ';
	if ($yo == 'Pepe'){
		echo 'Yo soy Pepe';
	} else {
	echo 'Yo no soy Pepe';
}

?>

<?php
	$yo2 = ' ';
	if ($yo2 == 'Pepe'){ ?>
		<p>Yo soy Pepe</p>
	<?php} else {?>
		<p>Yo no soy Pepe</p>
	<?php }?>

<?php echo "Esto se imprime por que quiero" ?>

<?php
$cadena = "Soy una cadena de texto<br>";

var_dump($cadena);

echo $cadena;

$cadena = 4;
$numero = 3;

echo ($cadena + $nuemro). "<br>";

$cadena = 3.75;

echo $cadena. "<br>";

$variable = false;
if ($variable == false) {
	echo "La variable tiene valor falso<br>";
}

//Con comillas simples imprime $nombre pero con comillas dobles imprime el valor de la variable
$nombre = "Pepe";
$cadena1 = "Mi nombre es $nombre";
$cadena2 = 'Mi nombre es $nombre';

echo $cadena1 . "<br>";
echo $cadena2 . '<br>';
echo "Mi nombre es " . $nombre . '<br>';
//La mejor manera de hacerlo es como debajo, introduciendo la menos cantidad posible de contenido dentro de php
?>
Mi nombre es <?= $nombre ?> <br/>

<?php
//Sirve como un if else pero abreviado para php
	echo $cadena1 ? "Hay texto" : "No hay texto";
	echo "<br>"; 
	echo empty($cadena) ? "No hay texto" : "Hay texto";
	echo "<br>";

//Declarar array
	$vector = ["Juan", "Pepe", "Luis"];
	var_dump($vector);
	echo "<br>";
	$vector[] = "Jaime";
	echo "<br>";
	var_dump($vector);

//Array asociativo
	$capital["España"] = "Madrid";
	$capital["Francia"] = "Paris";
	echo "<br>";
	var_dump($capital);
	echo "<br>";
	$capital[] = ["Italia" => "Roma"];
	var_dump($capital);
	echo "<br>";

	//Unset sirve para vaciar la variable/array
	unset($capital);
	//var_dump($capital);
	echo "<br>";

	//for each
	$capital["España"] = "Madrid";
	$capital["Francia"] = "Paris";
	$capital["Italia"] = "Roma";
	$capital["Grecia"] = "Atenas";
	foreach ($capital as $key => $value) {
		echo "La capital de " . $key . " es " . $value . "<br>";
	}
?>
<?php//foreach mas eficiente?> 
<br><br>
Capitales de Europa:
<?php foreach ($capital as $key => $value) : ?>
	<li>La capital de <?= $key ?> es <?= $value ?></li>
<?php endforeach ?>
</ul>