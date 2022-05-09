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
    <h2 align="center">Registro de Usuarios</h2>
    <form class="row mb-2 col-4" id="formularioContacto" method="POST" style="margin: auto;">
        <label class="mt-2" for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
        <label class="mt-2" for="">Empresa:</label>
        <input type="text" class="form-control" name="empresa" id="empresa" aria-describedby="helpId" placeholder="Empresa">
        <label class="mt-2" for="telefono">Teléfono:</label>
        <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Teléfono">
        <label class="mt-2" for="mail">Mail:</label>
        <input type="text" class="form-control" name="mail" id="mail" aria-describedby="helpId" placeholder="Mail">
        <label class="mt-2" for="pais">Pais:</label>
        <div class="form-group col-lg-6">
            <input type="text" id="pais" name="pais" class="form-control">
        </div>
        <div class="form-group col-lg-6">
            <select id="mostrarPaises" class="form-control"></select>
        </div>
        <label class="mt-2" for="estado">Estado</label>
        <div class="form-group col-lg-6">
            <input disabled type="text" id="estado" name="estado" class="form-control ">
        </div>
        <div class="form-group col-lg-6">
            <select id="mostrarEstados" class="form-control "></select>
        </div>
        <label class="mt-2" for="comentarios">Comentarios:</label>
        <textarea type="text" class="form-control" name="comentarios" id="comentarios" aria-describedby="helpId" placeholder="Comentarios"></textarea>
    </form>
</div>

<?php
$archivo = "ejercicio6.js";
include_once("../../footer.php")
?>