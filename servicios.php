<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Christian Celis">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Karla:ital@1&display=swap" rel="stylesheet">
	<link rel="shorcut icon" href="imagenes/gg.svg">
	<title>Restaurante Innova</title>

</head>
<body">
	<header class="header2">
		<?php include  'Menu.php' ;?>
	</header>

	<main class="pagina">
		<section>
				<div class="contenido" style="color: black;">
					<div class="content">
						<h1>Nuestros Servicios</h1>
						<h2>->Reservas<-</h2>
						<p> El establecimiento ofrece servicio de apartado de mesas para que disfrute de un lugar fresco y comodo, y deguste su paladar con la mejor comida de Cucuta <br>
					 	</p>	
					</div>
					<div class="content">
					<img class="imagenservicios" src="Imagenes/reservaimg.jpg" alt="" style="width: 450px; height: 450px;">
					</div>
				</div>

		</section>
		</main>

		<main  class="pagina" style="background-color: yellow;">
		<section>
				<div class="contenido" style="color: black;">
					<div class="content">
						<h2>->Eventos<-</h2>
						<p> El establecimiento ofrece servicio de eventos para que disfrutes junto a tus seres queridos en una zona especial para este tipo de Actividades, tales como juntas empresariales, grados y cumpleaños, ademas si es tu fecha especial adicionamos el pastel de cumpleaños y el recuerdo para que nunca olvides, la experiencia.<br>
					 	</p>	
					</div>
					<div class="content">
					<img class="imagenservicios" src="Imagenes/eventos.gif" alt="" style="width: 500px; height: 400px;">
					</div>
				</div>
		</section>
	</main>

	<main class="pagina2"  style="background-color: black; height: 1200px;"  >
		<section>
			<div class="contenido" style="margin-left: 460px; padding-top: 100px;">
				<div class="content"></div>	
			<h1 style="color: white; font-size:60px;  margin-bottom: 60px; padding-right: 30px;" >-Menu del restaurante-</h1>
			<div class="content">
					<img class="imagenservicios" src="Imagenes/menurest.png" alt="";>
			</div>
			</div>
			</section>
		
	</main>

		
	</main>
	<footer class="footer2">
		<?php include  'footer.php' ;?>
	</footer>
</body>
</html>