<?php
$Titulo = "Ejercicio 5";
include_once("../../header.php");
?>

<div class="container bg-dark mb-4 h-100">
    <h3 class="text-light text-center">Align-items-start</h3>
    <div class="my-5">
        <div class="row align-items-start " style="height: 120px">
            <div class="col-4 bg-light border border-2 border-secondary">
                Columna 1
            </div>
            <div class="col-4 bg-light border border-2 border-secondary">
                    Columna 2
                </div>
                <div class=" col-4 bg-light border border-2 border-secondary">
                Columna 3
            </div>
        </div>
    </div>
</div>


<div class="container bg-dark mb-4 h-100">
    <h3 class="text-light text-center">Align-items-center</h3>
    <div class="my-5">
        <div class="row align-items-center " style="height: 120px">
            <div class="col-4 bg-light border border-2 border-secondary">
                Columna 1
            </div>
            <div class="col-4 bg-light border border-2 border-secondary">
                    Columna 2
                </div>
                <div class=" col-4 bg-light border border-2 border-secondary">
                Columna 3
            </div>
        </div>
    </div>
</div>


<div class="container bg-dark mb-4 h-100">
    <h3 class="text-light text-center">Align-items-end</h3>
    <div class="my-5">
        <div class="row align-items-end" style="height: 120px">
            <div class="col-4 bg-light border border-2 border-secondary">
                Columna 1
            </div>
            <div class="col-4 bg-light border border-2 border-secondary">
                    Columna 2
                </div>
                <div class=" col-4 bg-light border border-2 border-secondary">
                Columna 3
            </div>
        </div>
    </div>
</div>


<div class="container bg-dark mb-4" >
    <h3 class="text-light text-center">Alineamiento por columnas</h3>
    <div class="my-5">
        <div class="row align-items-start" style="height: 120px">
            <div class="col-4 bg-light border border-2 border-secondary align-self-end">
                Columna 1
            </div>
            <div class="col-4 bg-light border border-2 border-secondary">
                    Columna 2
                </div>
                <div class=" col-4 bg-light border border-2 border-secondary align-self-center">
                Columna 3
            </div>
        </div>
    </div>
</div>


<?php

include_once("../../footer.php");
?>