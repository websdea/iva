<?php
   header("Content-type: text/html;charset=\"utf-8\"");
   $nombre = $_POST['nombre'];
   $correo = $_POST['email'];
   $telefono = $_POST['telefono'];
   $mensaje = $_POST['mensaje'];

   $header = 'From: ' . $correo . " \r\n";
   $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
   $header .= "Mime-Version: 1.0 \r\n";
   $header .= "Content-Type: text/plain";

   $contenido = "Este mensaje fue enviado por " . $nombre . " \r\n";
   $contenido .= "Su e-mail es: " . $correo . " \r\n";
   $contenido .= "Telefono: " . $telefono . " \r\n";
   $contenido .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
   $contenido .= "Enviado el " . date('d/m/y', time());

   $destino = 'meraro2005@gmail.com';
   $asunto =  'Mensaje de mi sitio Web 12345';

   if (mail($destino, $asunto, utf8_decode($mensaje), $header))
   echo "<script type='text/javascript'>alter('Tu mensaje ha sido enviado exitosamente');</script>";
   echo "<script type='text/javascript'>window.location.href='https://espanol.yahoo.com/';</script>";



   //$destino = "meraro2005@gmail.com";
   ////esto es al correo que se enviara el mensaje
   //$nombre = $_POST["nombre"];
   //$correo = $_POST["email"];
   //$telefono = $_POST["telefono"];
   //$mensaje = $_POST["mensaje"];
   
   //$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . ////$telefono . "\nMensaje: " . $mensaje;

   //mail($destino,"Contacto", $contenido);
   //header("Location:https://espanol.yahoo.com/");   
?>
