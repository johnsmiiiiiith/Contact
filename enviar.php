<?php
    $destino= "consultas@algogenial.com";
    $nombre= $_POST["Nombre"];
    $apellido= $_POST["Apellido"];
    $telefono= $_POST["Teléfono"];
    $mail= $_POST["Mail"];
    $mensaje= $_POST["Mensaje"];
    $contenido= "Nombre:".$Nombre."\nApellido:".$Apellido."\nTeléfono:".$Telefono."\nMail:".$Mail."\nMensaje:".$Mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:Gracias.html");


?>
