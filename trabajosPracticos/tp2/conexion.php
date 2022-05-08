<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_db = "practicoajax";

$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if(mysqli_connect_errno()){
    echo "Fallo la conexion con MySQL: " + mysqli_connect_errno();
}

