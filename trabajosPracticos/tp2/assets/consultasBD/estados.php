<?php

include_once "conexion.php";

$result_array = array();
/* Check connection  */
if ($con->connect_error) {
    die("Connection to database failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM estados WHERE idPais = {$_GET['idpais']}";
$result = $con->query($sql);
/* If there are results from database push to result array */
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($result_array, $row);
    }
}
header('Content-type: application/json');
echo json_encode($result_array);

$con->close();
