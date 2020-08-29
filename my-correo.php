<?php
   $destinatario = 'meraro2005@gmail.com';
   //esto es al correo que se enviara el mensaje
   $nombre = $_POST['nombre'];
   $telefono = $_POST['telefono'];
   $mensaje = $_POST['mensaje'];
   $email = $_POST['email'];

   $header = "Enviado desde la Pagina de Iglesia V.A.";
   $mensajecompleto = $mensaje . "\nAtentamente: " . $nombre 

   mail($destinatario, $telefono, $mensajecompleto, $header);

   echo "<script>alert('correo enviado exitosamente')</script>";
   echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>
