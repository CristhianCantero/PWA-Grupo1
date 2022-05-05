<?php
$Titulo = "Ejercicio final";
include_once("../../header.php");
?>
<div class="container" style="margin-top: 30px;">

    <div class="row" name="fila1">
        <div class="col-lg-12">
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, similique. Molestiae repellat quibusdam omnis eveniet necessitatibus recusandae soluta minima, quia provident impedit. Adipisci accusantium sed, molestiae consectetur quod ipsum excepturi!</span>
        </div>
        <!-- No se si hacerlo así o una sola columna de 12 con muchas imagenes dentro, siento que es mas facil de ordenar de esta manera cada imagen -->
    </div>
    <br>
    <hr>
    <br>
    <div class="row" name="fila2" align="center">
        <div class="col-lg-12 ">
            <img src="../../img/endgame.jpg" alt="Avengers: Endgame" height="150" width="100">
            <img src="../../img/interestellar.jpg" alt="Interestellar" height="150" width="100">
            <img src="../../img/arcane.jpg" alt="Arcane" height="150" width="100">
            <img src="../../img/madmax.jpg" alt="Mad Max: Fury Road" height="150" width="100">
            <img src="../../img/morbius.jpg" alt="Morbius" height="150" width="100">
            <img src="../../img/taboo.jpg" alt="Taboo" height="150" width="100">
            <img src="../../img/peakyblinders.jpg" alt="Peaky Blinders" height="150" width="100">
            <img src="../../img/spiderman-no_way_home.jpg" alt="Spider-Man: No Way Home" height="150" width="100">
            <img src="../../img/batman.jpg" alt="The Batman" height="150" width="100">
            <img src="../../img/theflash.jpg" alt="The Flash" height="150" width="100">
            <img src="../../img/uncharted.jpg" alt="Uncharted: Fuera del Mapa" height="150" width="100">
            <img src="../../img/encanto.jpg" alt="Encanto" height="150" width="100">
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="row" name="fila-media">
        <div class="col-sm-4">
            <div class="list-group">
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/endgame.jpg')" id="Avengers: Endgame">Avengers: Endgame</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/interestellar.jpg')" id="Interestellar">Interestellar</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/arcane.jpg')" id="Arcane">Arcane</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/madmax.jpg')" id="Mad Max: Fury Road">Mad Max: Fury Road</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/morbius.jpg')" id="Morbius">Morbius</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/taboo.jpg')" id="Taboo">Taboo</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/peakyblinders.jpg')" id="Peaky Blinders">Peaky Blinders</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/spiderman-no_way_home.jpg')" id="Spiderman: No Way Home">Spiderman: No Way Home</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/batman.jpg')" id="Batman">Batman</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/theflash.jpg')" id="The Flash">The Flash</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/uncharted.jpg')" id="Uncharted: Fuera del Mapa">Uncharted: Fuera del Mapa</a>
                <a class="list-group-item list-group-item-action" onclick="seleccionar('../../img/encanto.jpg')" id="Encanto">Encanto</a>
            </div>
        </div>
        <div class="col-sm-8">
            <h1 id="contexto"></h1>
            <img src="" class="img-fluid" id="imagenMax">
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="row" name="fila-baja">

        <div class="col-sm-8">
            <table class="table">
                <h1 class="p-1">Las mas taquilleras</h1>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pelicula</th>
                        <th scope="col">Año Estreno</th>
                        <th scope="col">Genero</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Encato</td>
                        <td>2021</td>
                        <td>Infantil</td>
                        <td><button type="button" class="btn btn-info" id="encanto" onclick="sinopsis('encanto')">SINOPSIS</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Avengers: Endgame</td>
                        <td>2019</td>
                        <td>Accion</td>
                        <td><button type="button" class="btn btn-info" id="endgame" onclick="sinopsis('endgame')">SINOPSIS</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Interestellar</td>
                        <td>2014</td>
                        <td>Ciencia Ficcion</td>
                        <td><button type="button" class="btn btn-info" id="interestellar" onclick="sinopsis('interestellar')">SINOPSIS</button></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Spiderman: No Way Home</td>
                        <td>2021</td>
                        <td>Accion/Aventura</td>
                        <td><button type="button" class="btn btn-info" id="spiderman" onclick="sinopsis('spiderman')">SINOPSIS</button></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Mad Max: Fury Road</td>
                        <td>2015</td>
                        <td>Accion</td>
                        <td><button type="button" class="btn btn-info" id="madmax" onclick="sinopsis('madmax')">SINOPSIS</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-sm-4 mt-5">
            <h3 id="sinopsis"></h3>
        </div>
    </div>

</div>



<?php

include_once("../../footer.php");
?>