<?php
$Titulo = "Ejercicio 6";
include_once("../../header.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ejercicio 6</h5>
            <p class="card-text">
                Al formulario de registro anterior agregar un campo de Estado/Provincia en un campo de
                texto. A medida que escribimos caracteres dentro del input mostraremos un conjunto de
                estados, a modo de lista de sugerencias, que comienzan con los caracteres ingresados
                hasta el momento. La lista de sugerencias se deberá mostrar en un div que se encuentre
                debajo del input.
            </p>
        </div>
    </div>
    <hr>
</div>

<?php
$archivo = "ejercicio6.js";
include_once("../../footer.php")
?>