<?php

  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $celular = $_POST["subject"];
  $mensaje = $_POST["message"];

  $para = "alquilerfincaschinauta1@gmail.com";
  $asunto = "Nuevo mensaje de $name";

  $mensaje = "
    Nombre del remitente: ".$name."
    correo: ".$email."
    celular: ".$subject."
    mensaje: ".$message."

  ";

  mail($para,$asunto,utf8_decode($mensaje));

  header ("location: index.html");


 ?>
