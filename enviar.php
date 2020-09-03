<?php
   $destino = "meraro2005@gmail.com";
   $nombre = $_POST["nombre"];
   $correo = $_POST["correo"];
   $telefono = $_POST["telefono"];
   $mensaje = $_POST["mensaje"];
   
   $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
   mail($destino,"Contacto", $contenido);
   header("Location:gracias.html");   
?>

<!DOCTYPE html>
<html lang="en">
<head>

		<meta content="text/html; charset=utf-" http-equiv="Content-Type" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Gracias 1</title>
		<link rel="stylesheet" href="css/contacto.css" />

		<!--CSS-->
		<link rel="stylesheet" href="css/global.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />

		<!--JS-->
</head>
<body>
	<header class="cls-gracias">
		<h1>GRACIAS POR ESCRIBIRNOS</h1>
	</header>
</body>
</html>
