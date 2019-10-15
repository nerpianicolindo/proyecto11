<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title>Enlace</title>
</head>
<body>
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
			private $etiqueta;
			private $url;

			public function __construct($texto, $url){
				$this->etiqueta = $texto;
				$this->url = $url;
			}
			public function mostrar() {
				$aux = 'Este es un enlace a ' . '<a href="https://' . $this->url . '">' . $this->etiqueta . '</a>';
				return $aux;
			}
		}

		$aux = 'Marca';
		$aux2 = 'www.marca.com';

		$google = new Enlace($aux, $aux2);
		$aux = $google->mostrar();
		echo $aux;
		include 'footer.php';
	?>
</body>
</html> 

</body>
</html>



