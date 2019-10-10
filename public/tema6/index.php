<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tema 6</title>
</head>
<body>
	<h1>Formularios Usables</h1>
	
	<?php	
	function showErrors($errors){
		echo '<ul>';
		foreach ($errors as $error) {
			echo '<li>' . $error . '</li>';
		}
		echo '</ul><br>';
	}

	if (! $_POST) {
				include 'formulario.php';
			} else {  
				$errors = [];
				if (! isset($_POST['name'])){
					$errors[] = 'No he recibido el nombre';
				} 
				if (strlen($_POST['name'])<3){
					$errors[] =  'El nombre es demasiado corto';
				} 
				if (! isset($_POST['email'])){
					$errors[] =  'No se ha recibido el email';
				} 
				if (strlen($_POST['email']) < 6) {
					$errors[] =  'El correo electronico no es valido';
				} 
				if (! isset($_POST['password']) || ! isset($_POST['password2'])) {
					$errors[] = 'No he recibido ambas contraseñas';
				} 
				if (strlen($_POST['password'])< 6){
					$errors[] = 'La contraseña debe tener al menos 6 caracteres';
				} 
				if ($_POST['password'] != $_POST['password2']) {
					$errors[] = 'Ambas contraseñas deben ser iguales';
				} 
				if ($errors) {
					showErrors($errors);
					echo '<br/><a href="index.php">Volver al formulario';
				
				}
				else {
					echo 'Todo bien, pasamos a registrar ese usuario';
				}

			include 'footer.php';

			} ?>

</body>
</html>