<?php
$Titulo = "Ejercicio 8";
include_once("../../header.php");
?>

<div class="container align-center">
    <h1 class="text-center">EJERCICIO 2</h1>
    <div class="row">
        <div class="col-xxl-10 col-xl-9 col-lg-8 col-md-5 col-sm-6 col-5 bg-light border border-2 border-dark">
            <h1>Columna 1</h1>
            <p>Esto es una prueba de bootstrap.</p>
        </div>
        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-7 col-sm-6 col-7 bg-light border border-2 border-dark">
            <h1>Columna 2</h1>
            <p>Esto es una prueba de bootstrap.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-10 bg-light border border-2 border-dark">
            <h2>Col 1</h2>
        </div>
        <div class="col-xxl-2 bg-light border border-2 border-dark">
            <h2>Col 2</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-9 bg-light border border-2 border-dark">
            <h2>Col 1</h2>
        </div>
        <div class="col-xl-3 bg-light border border-2 border-dark">
            <h2>Col 2</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 bg-light border border-2 border-dark">
            <h2>Col 1</h2>
        </div>
        <div class="col-lg-4 bg-light border border-2 border-dark">
            <h2>Col 2</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 bg-light border border-2 border-dark">
            <h2>Col 1</h2>
        </div>
        <div class="col-md-5 bg-light border border-2 border-dark">
            <h2>Col 2</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 bg-light border border-2 border-dark">
            <h2>Col 1</h2>
        </div>
        <div class="col-sm-6 bg-light border border-2 border-dark">
            <h2>Col 2</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-5 bg-light border border-2 border-dark">
            <h2>Col 1</h2>
        </div>
        <div class="col-7 bg-light border border-2 border-dark">
            <h2>Col 2</h2>
        </div>
    </div>
<hr>
    <h1 class="text-center">COLUMNAS</h1>
    <!-- Row para pantallas xxl-->

    <div class="row mb-5 justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 card m-2" style="width: 18rem;">
            <img src="img/endgame.jpg" class="card-img-top" alt="Endgame" height="450px">
            <div class="card-body">
                <h5 class="card-title">AVENGERS: ENDGAME</h5>
                <p class="card-text">Después de los eventos devastadores de "Avengers: Infinity War", el universo está en ruinas debido a las acciones de Thanos, el Titán Loco. Con la ayuda de los aliados que quedaron, los Vengadores deberán reunirse una vez más para intentar detenerlo y restaurar el orden en el universo de una vez por todas.</p>
                <a href="#" class="btn btn-primary">VER</a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 m-2 card" style="width: 18rem;">
            <img src="img/interestellar.jpg" class="card-img-top" alt="Interestellar" height="450px">
            <div class="card-body">
                <h5 class="card-title">INTERESTELLAR</h5>
                <p class="card-text">Un grupo de científicos y exploradores, encabezados por Cooper, se embarcan en un viaje espacial para encontrar un lugar con las condiciones necesarias para reemplazar a la Tierra y comenzar una nueva vida allí.</p>
                <a href="#" class="btn btn-primary">VER</a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 card m-2" style="width: 18rem;">
            <img src="img/peakyblinders.jpg" class="card-img-top" alt="Peaky Blinders" height="450px">
            <div class="card-body">
                <h5 class="card-title">PEAKY BLINDERS</h5>
                <p class="card-text">Gran Bretaña vive la posguerra. Los soldados regresan, se acuñan nuevas revoluciones y nacen bandas criminales en una nación agitada. En Birmingham, una pandilla de gánsters callejeros asciende hasta convertirse en los reyes de la clase obrera.</p>
                <a href="#" class="btn btn-primary">VER</a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 card m-2" style="width: 18rem;">
            <img src="img/madmax.jpg" class="card-img-top" alt="Mad-Max" height="450px">
            <div class="card-body">
                <h5 class="card-title">MAD MAX: FURY ROAD</h5>
                <p class="card-text">Tras la guerra termonuclear que ha convertido a la Tierra en un páramo, el antiguo policía Max Rockatansky, atormentado por los espíritus de aquellos a los que no pudo proteger, se ha convertido en un hombre con un solo instinto: sobrevivir.</p>
                <a href="#" class="btn btn-primary">VER</a>
            </div>
        </div>
    </div>
</div>



<?php

include_once("../../footer.php");
?>