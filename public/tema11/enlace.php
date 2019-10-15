<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title>Enlace</title>
</head>
<body>
	<?php 
	class Enlace
		{
			public $etiqueta;
			public $url;
			public function mostrar() {
				echo 'Este es un enlace a'.'<a href=https://' . $this->url . '>' . $this->etiqueta . '</a>';
			}
		}

		$google = new Enlace();
		$google->etiqueta = " Marca";
		$google->url = "www.marca.com";
		$google->mostrar();
		include 'footer.php';
	?>
</body>
</html>