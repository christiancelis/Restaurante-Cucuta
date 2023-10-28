<!DOCTYPE html>
<html lang="en">
<head>
	 <title > restaurante web </title>
    <!-- META DATOS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Christian Celis">
    <!-- CONEXION CON BOOTSTRAP -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CONEXION CON HOJA DE ESTILOS -->
    <link rel="stylesheet" type="text/css" href="estilos3.css">
   	<link rel="stylesheet" href="estilos.css">
    <link rel="shorcut icon" href="imagenes/casa.svg">

</head>

<body>
	<header class="header">
        <?php include  'Menu.php' ;?>
    </header>
	<main>
		<section>
			<article>
				<div class="contacto">
					<div class="titu">
						<h1>Nuevo Mensaje</h1>
						
					</div>
					<p>
					Hola Administrador,<br>
					<?php  echo $_POST["nombre"];?>  <?php  echo $_POST["apellido"];?> con correo <?php  echo $_POST["correo"];?>
					te escribio el siguiente mensaje:
					<br>
					<?php  echo $_POST["comentario"];?>

				</p>
				</div>
				
			</article>
			
		</section>
		
	</main>
	
	
</body>
</html>