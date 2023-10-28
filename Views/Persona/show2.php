<div class="container">
	<h2>Lista Usuario</h2>
	<form class="form-inline" action="?controller=usuario&&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="idusuario" name="idusuario" type="text" placeholder="Busqueda por ID">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-search"> </span> Buscar</button>
			</div>
		</div>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Idusuario</th>
					<th>Username</th>
					<th>Passowrod</th>
					<th>Id Persona</th>
					<th>Id Tipo usuario</th>
				</tr>
				<tbody>
					<?php foreach ($listausuario as$usuario) {?>
					<tr>
						<td> <a href="?controller=usuario&&action=updateshow&&idusuario=<?php  echo $usuario->getIdpusuario()?>"> <?php echo $usuario->getIdusuario(); ?></a> </td>
						<td><?php echo $usuario->getUsername(); ?></td>
						<td><?php echo $usuario->getPassword(); ?></td>
						<td><?php echo $usuario->getIdpersona(); ?></td>
						<td><?php echo $usuario->getIdtipousuario(); ?></td>
						<td><a href="?controller=usuario&&action=delete&&idusuario=<?php echo $usuario->getIdusuario() ?>">Eliminar</a> </td>
					</tr>
					<?php } ?>
				</tbody>

			</thead>
		</table>

	</div>	

</div>