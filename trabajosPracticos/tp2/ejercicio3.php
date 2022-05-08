<?php
$Titulo = "Ejercicio 3";
include_once("../../header.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ejercicio 3</h5>
            <p class="card-text">
                En el ejercicio 6 del práctico anterior, se utilizó una zona de imágenes extendidas junto con
                un título asociado.
            </p>
            <p class="card-text">
                Se pide ahora que al hacer click en cada título aparezca un modal descriptivo de la imagen
                y la imagen cambie acorde al título. Realizar esto con la ayuda de un modal del framework
                Bootstrap, cargue la información de la imagen con AJAX cuando se haga clic en el título de
                una imagen AAA. La información puede ser tomada desde una base o desde archivos.
            </p>
        </div>
    </div>
    <hr>
    <div class="row md-2 mt-2" align="center">
        <!-- <button type="button" class="btn btn-primary" id="cargarPeliculas">Cargar Peliculas</button> -->
        <ul class="nav thumb" id="peliculas">
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="335787">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//8FiWi61YRbkN95xmH668iq5sCo1.jpg" alt="Uncharted" height="150" width="100"></a>
            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="675353">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//sJiHVM0A3OXDVxl4Z6a7ihMPHfm.jpg" alt="Sonic 2 La Película" height="150" width="100"></a>
            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="414906">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//zFTLPipninMF4THDbdkQUZLWMEw.jpg" alt="The Batman" height="150" width="100"></a>
            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="634649">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//osYbtvqjMUhEXgkuFJOsRYVpq6N.jpg" alt="Spider-Man: No Way Home" height="150" width="100"></a>
            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="829557">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//k3J2GdYxhR6U2RfsHZOsmHVKW7m.jpg" alt="365 días: Aquel día" height="150" width="100"></a>
            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="763285">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//hUbgg3mMSbY9PlpTxBo4IFUVSd6.jpg" alt="Ambulance: Plan de Huida" height="150" width="100"></a>
            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="508947">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//hUupIkIKPpNLYniPGRxRpEQFrX3.jpg" alt="Red" height="150" width="100"></a>
            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="453395">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//1w3MlLZPqr2Pm5loQ9h2gJwenMr.jpg" alt="Doctor Strange en el multiverso de la locura" height="150" width="100"></a>
            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="893370">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//3CvBuw9aoziJJAbqymmsF2drnzH.jpg" alt="Virus-32" height="150" width="100"></a>
            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="799876">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//uoMyXY1ReK5I1kkMMQfqod7YhXh.jpg" alt="El sastre de la mafia" height="150" width="100"></a>

            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="629542">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//i3R16rGnEytYkJOyao9JOFUuvu8.jpg" alt="Los Tipos Malos" height="150" width="100"></a>

            </li>
            <li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="406759">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342//noe4dNuEbqj7xIjgOFkTOohRsNC.jpg" alt="Moonfall" height="150" width="100"></a>
            </li>
        </ul>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="titulo modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="sinopsis modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$archivo = "ejercicio3.js";
include_once("../../footer.php")
?>