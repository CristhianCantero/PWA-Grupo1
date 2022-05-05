<?php
$Titulo = "Ejercicio 6";
include_once("../../header.php");
?>

<div class="container mb-5">
        <div class="row mb-3 justify-content-end">
            <div class="col-6 d-flex justify-content-end bg-dark text-light border border-secondary border-2 p-4"> justify-content-end 1</div>
            <div class="col-6 d-flex justify-content-end bg-dark text-light border border-secondary border-2 p-4"> justify-content-end 2</div>
        </div>
        <div class="row mb-3">
            <div class="col-6 d-flex  justify-content-start bg-dark text-light border border-secondary border-2 p-4"> justify-content-start 1</div>
            <div class="col-6 d-flex  justify-content-start bg-dark text-light border border-secondary border-2 p-4"> justify-content-start 2</div>
        </div>
        <div class="row mb-3">
            <div class="col-6 d-flex  justify-content-center bg-dark text-light border border-secondary border-2 p-4"> justify-content-center 1</div>
            <div class="col-6 d-flex  justify-content-center bg-dark text-light border border-secondary border-2 p-4"> justify-content-center 2</div>
        </div>
        <div class="row mb-3">
            <div class="col-6 d-flex  justify-content-between bg-dark text-light border border-secondary border-2 p-4"> <p>justify-content-between 1-1</p> <p>justify-content-between 1-2</p>  </div>
            <div class="col-6 d-flex  justify-content-between bg-dark text-light border border-secondary border-2 p-4"> <p>justify-content-between 2-1</p> <p>justify-content-between 2-2</p>  </div>
        </div>
        <div class="row mb-3">
            <div class="col-6 d-flex  justify-content-around bg-dark text-light border border-secondary border-2 p-4"> <p>justify-content-around 1-1</p> <p>justify-content-around 1-2</p>  </div>
            <div class="col-6 d-flex  justify-content-around bg-dark text-light border border-secondary border-2 p-4"> <p>justify-content-around 2-1</p> <p>justify-content-around 2-2</p>  </div>
        </div>
    </div>



    <?php

include_once("../../footer.php");
?>