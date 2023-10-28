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

<body>
	<header>
			<?php include  'Menu.php' ;?>
	</header>
	<main class="container" style="background:url(imagenes/p7.jpg) no-repeat center; background-size: cover; "> 
			<div class="principal">
				<h1>  RESTAURANTE <br>____ INNOVA  ____</h1>
				<p > Degusta tu paladar con la mejor <br> comida de Cúcuta</p>
				<button type="button" onclick="location.href='Sign in.php'">Reserva Ahora</button>
			</div>
	</main>
	<footer>
		<div>
			<h2> - POR PANDEMIA SOLO ATENDEMOS POR -<span style="color: #EFB917;">  RESERVA</span> -</h2>
		</div>
	</footer>
	<div class="sombra"><video src="Imagenes/Video1.mp4" loop, autoplay , muted></div>
		<div class="sombra"></div>
	<a name="tema1"></a>
	
	<main class="pagina">
		<section>
			<div class="titulo">
				<h1>Restaurante Innova</h1>
			</div>
			<div class="contenido">
				<h2>Quienes Somos</h2>
				<p>
				Brindamos a nuestros clientes deliciosos platos de comida tipica Cúcuteña, nacional e internacional, acompañados de las bebidas artesanales de la region
				<br>
				Atendemos reuniones Sociales como primeras comuniones, cumpleaños , grupos empresariales, familiares y recreacion, ofreciendo productos de calidad, trato amable y un excelente servicio.</p>
				<br>
				<h2>Ubicacion</h2>
				<p>Contamos con la fortuna de tener un terreno propio de la familia ubicado en la via que conduce al malecon, muy transitada los fines de semana y reconocida como destino turistico, ven y visitanos, nuestro local esta abierto de lunes a viernes de 6am a 12m y de 2pm a 7pm, te esperamos!!</p>
			</div>
		</section>
	</main>

	<main class="otraspaginas" style="background-color: black">
		<section>
			<div class="titulo" style="padding-top: 100px; color: black;">
				<h1 style="color: white">Grupo Empresarial</h1>
			</div>
		<div class="contenido">
			<div class="contenido-img">
				<img class="circulo" src="Imagenes/chef1.jpg" alt=""> 
				<br><p style="color: white">Chef Maria</p>	
			</div>
			<div class="contenido-img">
				<img class="circulo" src="Imagenes/chefp.jpg" alt=""> 
				<br><p style="color: white">Chef Patricio</p>	
			</div>
			<div class="contenido-img">
				<img class="circulo" src="Imagenes/meceros.jpg" alt=""> 
				<br><p style="color: white">Grupo de Camareros</p>	
			</div>
		</div>
		</section>
	</main>

			<div class="map">
				<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7904.123986663835!2d-72.494475675961!3d7.888583354601033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e664509ac24c705%3A0x9a4055e3a037892c!2sNueva%20Plazoleta%20De%20Comidas%20%22El%20Malecon%22!5e0!3m2!1ses!2sco!4v1605800602353!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
<footer class="footer2">
		<?php include  'footer.php' ;?>
	</footer>
</body>
</html>
