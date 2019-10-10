<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<p>
		<label for="name">Nombre</label>
		<input type="text" name="name" value="<?= isset($_POST['name']) ? $_POST['name']
			:  '' ?>"/>		
	</p>
	<p>
		<label for="email">Correo electronico</label>
		<input type="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email']
			:  '' ?>"/>
	</p>
	<p>
		<label for="password">Contraseña</label>
		<input type="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password']
			:  '' ?>"/>
	</p>
	<p>
		<label for="password2">Repita la contraseña</label>
		<input type="password" name="password2" value="<?= isset($_POST['password2']) ? $_POST['password2']
			:  '' ?>"/>
	</p>
	<p>
		<label>
			<input type="submit" value="Enviar">
		</label>
	</p>

</form>