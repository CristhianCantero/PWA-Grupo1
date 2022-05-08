<?php
$Titulo = "Ejercicio 1";
include_once("../../header.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ejercicio 1</h5>
            <p class="card-text">
                Usando AJAX, implementá un par de selects relacionados dependientes.
                El contenido de los select debe estar relacionado a tu página, por ejemplo, si tu sitio fue de
                películas el contenido de los select puede ser Títulos de películas y actores. Similar si es
                música. Si es de recetas puede ser Receta e Ingredientes.
                Para comenzar a probar buscá en la web ejemplos de países y Estados o provincias.
            </p>
            <p class="card-text">
                El funcionamiento debe ser que al seleccionar algún elemento del primer select se deberá
                habilitar el segundo select listando exclusivamente el contenido asociado a la primera
                selección
            </p>
        </div>
    </div>
    <hr>
    <div class="selectGeneros">
        <select class="form-select" id="listadoGeneros" aria-label="Seleccionar genero">
            <option selected>Seleccionar Genero...</option>
            <option value="28">Accion</option>
            <option value="35">Comedia</option>
            <option value="18">Drama</option>
            <option value="14">Fantasia</option>
            <option value="10749">Romantica</option>
            <option value="878">Ciencia Ficcion</option>
        </select>
    </div>
    <br>
    <div class="selectPeliculas">
        <select class="form-select" id="listadoPeliculas" aria-label="Seleccionar genero">
            <option selected>Ver Peliculas...</option>
        </select>
    </div>
</div>

<?php
$archivo = "ejercicio1.js";
include_once("../../footer.php");
?>