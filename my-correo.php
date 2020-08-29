<?php
   $destino = "meraro2005@gmail.com";
   //esto es al correo que se enviara el mensaje
   $nombre = $_POST["nombre"];
   $correo = $_POST["email"];
   $telefono = $_POST["telefono"];
   $mensaje = $_POST["mensaje"];
   
   $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

   mail($destino,"Contacto", $contenido);
   header("Location:https://espanol.yahoo.com/");

?>