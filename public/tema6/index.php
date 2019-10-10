<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tema 6</title>
</head>
<body>
	<h1>Formularios Usables</h1>
	
	<?php	if (! $_POST) {
				include 'formulario.php';
			} else {  
				if (! isset($_POST['name'])){
					echo 'No he recibido el nombre';
				} elseif (strlen($_POST['name'])<3){
					echo 'El nombre es demasiado corto';
				} elseif (! isset($_POST['email'])){
					echo 'No se ha recibido el email';
				} elseif (strlen($_POST['email']) < 6) {
					echo 'El correo electronico no es valido';
				} elseif (! isset($_POST['password']) || ! isset($_POST['password2'])) {
					echo 'No he recibido ambas contraseñas';
				} elseif (strlen($_POST['password'])< 6){
					echo 'La contraseña debe tener al menos 6 caracteres';
				} elseif ($_POST['password'] != $_POST['password2']) {
					echo 'Ambas contraseñas deben ser iguales';
				} else {
					echo 'Todo bien, pasamos a registrar ese usuario';
				}

			include 'footer.php';

			} ?>

</body>
</html>