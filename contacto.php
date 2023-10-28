<!DOCTYPE html>
<html lang="es">
<head>
	 <title > Restaurante Web </title>
    <!-- META DATOS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Christian Celis">

    <!-- CONEXION CON HOJA DE ESTILOS -->
    <link rel="stylesheet" type="text/css" href="estilos3.css">
    <link rel="stylesheet"  type="text/css" href="estilos.css">
    <link rel="shorcut icon" href="imagenes/casa.svg">
</head>
<body style="background:url(imagenes/golden.jpg) no-repeat center ; background-size: cover">
	<header>
        <?php include  'Menu.php';?>
    </header>

		
		<div class="formu">
		<form action="sendform.php" class="formulario" method="post" >
		<h1> Contactanos </h1>	
		<label> Nombre: </label> <br>
		<input type="text" id="nombrep" name="nombre" placeholder=" ----" required="#" ;><br>
		<label> Apellido: </label> <br>
		<input type="text"  id= apellido name="apellido" placeholder="  ----" required="#" ;><br>
		<label> Correo electronico:</label> <br>
		<input type="email" name="correo" placeholder="  ----" required="#" ;><br>
		<label>Comentario: </label> <br>
		<textarea type="textarea" name="comentario" rows="4" cols="30" placeholder="  ----" required="#" ; ></textarea> <br>
		<input class="se" type="submit" value="Enviar" style="	margin-top: 20px;" 	>	
		</form>	
		</div>

		
        <footer class="footer2">
        <?php include 'footer.php';?>
    </footer>
</body>
</html>