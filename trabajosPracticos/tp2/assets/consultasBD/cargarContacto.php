<?php

require "conexion.php";

$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];

$resultadoBD = mysqli_query($con, "INSERT INTO contactos (IdContacto, Nombre, Empresa, Telefono, Mail, Comentario) VALUES('', '".$nombre."', '".$empresa."', '".$telefono."', '".$email."', '".$comentarios."')");

