<?php

   $destino = "meraro2005@gmail.com";
   //esto es al correo que se enviara el mensaje
   $nombre = $_POST["nombre"];
   $correo = $_POST["email"];
   $telefono = $_POST["telefono"];
   $mensaje = $_POST["mensaje"];
   
   $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

   mail($destino, "Contacto", $contenido);
   header("Location:index.html");   
?>

<!DOCTYPE html>
<html lang="es" lang="en">
	<head>
		<!--<meta charset="UTF-8" />-->
		<meta content="text/html; charset=utf-" http-equiv="Content-Type" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

		<title>Mys Viajes - Eric-4</title>
		<link rel="stylesheet" href="css/contacto.css" />

		<!--CSS-->
		<link rel="stylesheet" href="css/global.css" />
		<link rel="stylesheet" href="css/menu.css" />
		<link rel="stylesheet" href="css/my-slider.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />

		<!--JS-->
	</head>
	<body>
		<header class="cls-header">
			<!--<div id="logo">Code<span id="logo-s">Daniela</span></div>
			<span class="sign"><a class="act" href="#">SIGN UP</a></span>
			<span class="sign"><a href="#">SIGN IN</a></span>-->

			<nav class="nav-menu">
				<div class="container-logo mycol-1">
					<div class="cont-logo">
						<div class="logo-name">
							<!--<a href="index.html"><img src="images/Logo-IVA.png" /></a>-->
							<a href="index.html" class="tit-logo">VidaAbundante</a>
						</div>
						<div class="icon-menu">
							<a id="btn-menu" class="btn-menu"
								><span class="fa fa-bars"></span
							></a>
						</div>
					</div>
				</div>

				<div class="container-menu-link mycol-2">
					<ul>
						<li class="active">
							<a href="index.html">Inicio</a>
						</li>
						<li>
							<a href="#id-nosotros" class="cls-nosotros">Nosotros</a>
						</li>
						<li>
							<a href="#12345" class="sub-menu">Servicios</a>
							<ul>
								<li>
									<a href="#id-servicios" class="cls-servicios"
										>Red de Jovenes</a
									>
								</li>
								<li><a href="#12345">Red de Adultos</a></li>
								<li><a href="#12345">Zona kids</a></li>
							</ul>
						</li>
						<li>
							<a href="#12345" class="sub-menu">Ministerios</a>
							<ul>
								<li>
									<a href="#id-ministerios" class="cls-ministerios">Alabanza</a>
								</li>
								<li><a href="#12345">Teatro</a></li>
								<li><a href="#12345">Universidad de la Vida</a></li>
							</ul>
						</li>
						<li><a href="eventos.html" class="pepe">Eventos</a></li>
						<li><a href="galeria.html" class="pepe">Media</a></li>
						<li><a href="contacto.html" class="pepe">Contacto</a></li>
					</ul>
				</div>

				<div class="container-icons mycol-3">
					<ul class="ul-icons">
						<li>
							<a
								href="https://www.facebook.com/Iglesia-Vida-Abundante-336218873235061/"
								target="_blank"
								class="item-fac"
							>
								<span class="fa fa-facebook fa2" aria-hidden="true"></span>
								<span class="fa fa-facebook fa2" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a
								href="https://www.youtube.com/channel/UCsljLl698YP9eg-zofaSZWw"
								target="_blank"
								class="item-you"
							>
								<span class="fa fa-youtube-play yo2" aria-hidden="true"></span>
								<span class="fa fa-youtube-play yo2" aria-hidden="true"></span>
							</a>
						</li>
						<li>
							<a href="#" class="item-twi">
								<span class="fa fa-twitter tw2" aria-hidden="true"></span>
								<span class="fa fa-twitter tw2" aria-hidden="true"></span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<!--\ Linea No Mover de aqui /-->
			<hr class="hr-ema-linea" />
		</header>
		<!-------------------------- Fin Header -------------------------->

		<!------------------------- //Fin banner ------------------------->
		<section class="contenido-seccion1">
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam
				impedit fugit? Assumenda ratione, neque, eum adipisci saepe possimus
				tempore voluptatibus, unde voluptate autem quia molestias. Error
				obcaecati dolorem consequuntur.
			</p>
			<br />
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam
				impedit fugit? Assumenda ratione, neque, eum adipisci saepe possimus
				tempore voluptatibus, unde voluptate autem quia molestias. Error
				obcaecati dolorem consequuntur.
			</p>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam
				impedit fugit? Assumenda ratione, neque, eum adipisci saepe possimus
				tempore voluptatibus, unde voluptate autem quia molestias. Error
				obcaecati dolorem consequuntur.
			</p>
			<br />
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam
				impedit fugit? Assumenda ratione, neque, eum adipisci saepe possimus
				tempore voluptatibus, unde voluptate autem quia molestias. Error
				obcaecati dolorem consequuntur.
			</p>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam
				impedit fugit? Assumenda ratione, neque, eum adipisci saepe possimus
				tempore voluptatibus, unde voluptate autem quia molestias. Error
				obcaecati dolorem consequuntur.
			</p>
			<br />
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam
				impedit fugit? Assumenda ratione, neque, eum adipisci saepe possimus
				tempore voluptatibus, unde voluptate autem quia molestias. Error
				obcaecati dolorem consequuntur.
			</p>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam
				impedit fugit? Assumenda ratione, neque, eum adipisci saepe possimus
				tempore voluptatibus, unde voluptate autem quia molestias. Error
				obcaecati dolorem consequuntur.
			</p>

			<div class="img-gradiente">
				<h2>Recuerda, DIOS ES AMOR</h2>
			</div>

			<br />
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam
				impedit fugit? Assumenda ratione, neque, eum adipisci saepe possimus
				tempore voluptatibus, unde voluptate autem quia molestias. Error
				obcaecati dolorem consequuntur.
			</p>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad numquam
				impedit fugit? Assumenda ratione, neque, eum adipisci saepe possimus
				tempore voluptatibus, unde voluptate autem quia molestias. Error
				obcaecati dolorem consequuntur.
			</p>
		</section>

		<section class="cls-contacto">
			<div class="content">
				<h2 class="logo">Datos de <span>Contacto</span></h2>
				<div class="contact-wrapper">
					<div class="contact-form">
						<h3>Completa los siguientes campo</h3>
						<form action="./my-correo.php" method="POST">
							<p>
								<label>Nombres</label>
								<input type="text" name="nombre" required />
							</p>
							<p>
								<label>Telefono / Celular</label>
								<input type="tel" name="telefono" required />
							</p>
							<p class="txt-large">
								<label>Correo electrónico</label>
								<input type="email" name="email" required />
							</p>
							<p class="txt-large">
								<label>Mensaje</label>
								<textarea name="mensaje" rows="3" required></textarea>
							</p>
							<p class="block-btn">
								<button type="submit" id="">Enviar mensaje</button>
							</p>
						</form>
					</div>
					<div class="contact-info">
						<h4>More Info</h4>
						<ul>
							<li><i class="fa fa-map-marker"></i> Baker Stret</li>
							<li><i class="fa fa-phone"></i> 111 111 111 111</li>
							<li><i class="fa fa-envelope-o"></i> contact@tito.com</li>
						</ul>
						<p>
							Lorem ajedres avenida chavez, de amborisio. Lorem ipson. Eso es un
							texto de prueba, aqui puedes poner informacion importante para tus
							contactos.
						</p>
						<p>Company.com</p>
					</div>
				</div>
			</div>
		</section>
		<!--========================= JavaScript =========================-->
		<!---------------------------------------------------------------->
		<!-- Sliders js -->
		<script src="js/my-slider.js"></script>
		<!-- //Fin Slider js -->
		<!---------------------------------------------------------------->
		<!-- Menu Mobil y Scroll-->
		<script src="js/3-jquery-3.5.1.js"></script>
		<script src="js/xx--my-contacto.js"></script>
		<!--Master-->
		<script src="js/my-menu.js"></script>
		<!--Menu Mobil-->
		<script type="text/javascript">
			$(window).on("scroll", function () {
				if ($(window).scrollTop()) {
					$("nav").addClass("black");
				} else {
					$("nav").removeClass("black");
				}
			});
		</script>
		<!--//Fin Scroll Menu-->
		<!---------------------------------------------------------------->

		<!-- //Banner   -->
	</body>
</html>
