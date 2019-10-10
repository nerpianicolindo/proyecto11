<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<p>
		<label for="name">Nombre</label>
		<input type="text" name="name"/>		
	</p>
	<p>
		<label for="email">Correo electronico</label>
		<input type="email" name="email"/>
	</p>
	<p>
		<label for="password">Contraseña</label>
		<input type="password" name="password"/>
	</p>
	<p>
		<label for="password2">Repita la contraseña</label>
		<input type="password" name="password2"/>
	</p>
	<p>
		<label>
			<input type="submit" value="Enviar">
		</label>
	</p>

</form>