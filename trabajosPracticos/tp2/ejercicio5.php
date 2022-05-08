<?php
$Titulo = "Ejercicio 5";
include_once("../../header.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ejercicio 5</h5>
            <p class="card-text">
                Reutilizar la tabla del práctico anterior y agregando hasta 18 filas, (si no la construyó
                agregue una para este propósito) y usando AJAX, hacer que esta tabla muestre los
                resultados de forma paginada en grupos de a 5.
            </p>
        </div>
    </div>
    <hr>
    <div class="container mt-2">
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
            <tbody id="tableBodyEjercicio5">

            </tbody>
        </table>
    </div>
</div>

<?php
$archivo = "ejercicio5.js";
include_once("../../footer.php");
?>