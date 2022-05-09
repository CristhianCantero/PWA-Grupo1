<?php

include_once "conexion.php";

$result_array = array();
$contactos_por_pagina = 5;
$page = '';
$output = '';

/* Check connection  */
if ($con->connect_error) {
     die("Connection to database failed: " . $conn->connect_error);
}

if(isset($_POST["page"])){
    $page = $_POST["page"];
}else{
    $page = 1;
}

$startFrom = ($page - 1) * $contactos_por_pagina;

/* SQL query to get results from database */
$sql = "SELECT * FROM contactos ORDER BY IdContacto DESC LIMIT $startFrom, $contactos_por_pagina";
$result = $con->query($sql);

$output .= '
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Empresa</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Comentario</th>
            </tr>
        </thead>
        <tbody>
';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $output .= '
        <tr>
            <td>'.$row['Nombre'].'</td>
            <td>'.$row['Empresa'].'</td>
            <td>'.$row['Telefono'].'</td>
            <td>'.$row['Mail'].'</td>
            <td>'.$row['Comentario'].'</td>
        </tr>
        ';
    }
}
$output .= '
        </tbody>
    </table><br/><div align="center">
';

$pageQuery = "SELECT * FROM contactos ORDER BY IdContacto DESC";
$pageResult = $con->query($pageQuery);
$totalRecords = mysqli_num_rows($pageResult);
$totalPages = ceil($totalRecords/$contactos_por_pagina);

$output .= '<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
';

if($page>1){
    $paginaAnterior = $page - 1;
    $output .= '
    <li class="page-item">
        <a class="pagination_link page-link" href="#" id='.$paginaAnterior.'>Anterior</a>
    </li>
    ';
}else{
    $output .= '
    <li class="page-item disabled">
        <a class="page-link">Anterior</a>
    </li>
    ';
}

for ($i=1; $i <= $totalPages ; $i++) { 
    if($i == $page){
        $output .= '<li class="page-item active"><a class="pagination_link page-link" href="#" id="'.$i.'">'.$i.'</a></li>';
    }else{
        $output .= '<li class="page-item"><a class="pagination_link page-link" href="#" id="'.$i.'">'.$i.'</a></li>';
    }
}

if($page<$totalPages){
    $paginaSiguiente = $page+1;
    $output .= '
    <li class="page-item">
        <a class="pagination_link page-link" href="#" id="'.$paginaSiguiente.'">Siguiente</a>
    </li>
    ';
}else{
    $output .= '
    <li class="page-item disabled">
        <a class="page-link" href="#"">Siguiente</a>
    </li>
    ';
}

$output .= '</ul></nav>';

echo $output;

$con->close();
