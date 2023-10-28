<div class="container">
	<h2>Actualizar usuario</h2>
	<form action="?controller=usuario&&action=update" method="POST">
		<input type="hidden" name="idusuario" value="<?php echo $usuario->getIdusuario() ?>" >
		<div class="form-group">
			<label for="text">Id usuario</label>
			<input type="text" name="idusuario2" id="idusuario2"  disabled="true" class="form-control" value="<?php echo $usuario->getIdusuario() ?>">
		</div>
		<div class="form-group">
			<label for="text">Username</label>
			<input type="text" name="username" id="username" class="form-control" value="<?php echo $usuario->getUsername() ?>">
		</div>
		<div class="form-group">
			<label for="text">Password</label>
			<input type="text" name="password" id="password" class="form-control" value="<?php echo $usuario->getPassword(); ?>">
		</div>
		<div class="form-group">
			<label for="text">id persona</label>
			<input type="text" name="idpersona" id="idpersona" class="form-control" value="<?php echo $usuario->getIdpersona(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Id tipo usuario</label>
			<input type="text" name="idtipousuario" id="idtipousuario" class="form-control" value="<?php echo $usuario->getIdtipousuario(); ?>">
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>
</div>