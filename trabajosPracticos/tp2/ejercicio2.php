<?php
$Titulo = "Ejercicio 2";
include_once("../../header.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ejercicio 2</h5>
            <p class="card-text">
                Utilizando el ejercicio de tabs del práctico de Bootstrap, cargar el contenido que utilizaste en
                cada tab de forma dinámica utilizando AJAX. Al hacer click en una pestaña, se deberá
                cargar el contenido de la sección correspondiente guardado en la base de datos en alguna
                tabla, o bien en algún archivo. Además, agregá estilos sobre la pestaña activa para dar la
                sensación de pestaña activada/desactivada mediante colores de fondo.
            </p>
        </div>
    </div>
    <hr>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="genero nav-link active" id="accion-tab" data-bs-toggle="tab" data-bs-target="#accion" type="button" role="tab" aria-controls="accion" aria-selected="true" value="28">Accion</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="genero nav-link" id="comedia-tab" data-bs-toggle="tab" data-bs-target="#comedia" type="button" role="tab" aria-controls="comedia" aria-selected="false" value="35">Comedia</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="genero nav-link" id="drama-tab" data-bs-toggle="tab" data-bs-target="#drama" type="button" role="tab" aria-controls="drama" aria-selected="false" value="18">Drama</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="genero nav-link" id="fantasia-tab" data-bs-toggle="tab" data-bs-target="#fantasia" type="button" role="tab" aria-controls="fantasia" aria-selected="false" value="14">Fantasia</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="genero nav-link" id="romantica-tab" data-bs-toggle="tab" data-bs-target="#romantica" type="button" role="tab" aria-controls="romantica" aria-selected="false" value="10749">Romantica</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="genero nav-link" id="ciencia-ficcion-tab" data-bs-toggle="tab" data-bs-target="#ciencia-ficcion" type="button" role="tab" aria-controls="ciencia-ficcion" aria-selected="false" value="878">Ciencia Ficcion</button>
        </li>
    </ul>
    <div class="tab-content row" id="myTabContent">
        <div class="tab-pane fade show active" id="accion" role="tabpanel" aria-labelledby="accion-tab"></div>
        <div class="tab-pane fade" id="comedia" role="tabpanel" aria-labelledby="comedia-tab"></div>
        <div class="tab-pane fade" id="drama" role="tabpanel" aria-labelledby="drama-tab"></div>
        <div class="tab-pane fade" id="fantasia" role="tabpanel" aria-labelledby="fantasia-tab"></div>
        <div class="tab-pane fade" id="romantica" role="tabpanel" aria-labelledby="romantica-tab"></div>
        <div class="tab-pane fade" id="ciencia-ficcion" role="tabpanel" aria-labelledby="ciencia-ficcion-tab"></div>
    </div>
</div>

<?php
include_once("../../footer.php");
?>