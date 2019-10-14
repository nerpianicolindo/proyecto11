<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title>Select</title>
</head>
<body>
	<?php
	class Select 
	{
		public $options =  array();

		public function imprimete(){
			if (sizeof($this->options) < 0){
				echo "No hay opciones a mostrar";
			} else {
				echo "<select><br/>";
				foreach ($this->options as $key => $value) {
					echo "<option value=\"{$value}\">{$key}</option><br/>";
				}
				echo "</select>";
			}
		}
	}
	
	$sel = new Select();
	$sel->options = ['Futbol' => 'futbol', 'Tenis' => 'tenis', 'Baloncesto' => 'baloncesto'];
	$sel->imprimete();

	include 'footer.php';

	?>

</body>
</html>