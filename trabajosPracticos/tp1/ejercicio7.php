<?php
$Titulo = "Ejercicio 7";
include_once("../../header.php");
?>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item ">
            <a class="nav-link active" data-toggle="tab" href="#tav1">Ejercicio 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tav2">Ejercicio 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tav3">Ejercicio 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tav4">Ejercicio 4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tav5">Ejercicio 5</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tav6">Ejercicio 6</a>
        </li>
    </ul>
</div>
<div class="tab-content">
    <div class="tab-pane fade show active" id="tav1">
        <?php
        include_once("./ejercicio1.php");
        ?>
    </div>


    <div class="tab-pane fade" id="tav2">
        <?php
        include_once("./ejercicio2.php");
        ?>
    </div>

    <div class="tab-pane fade" id="tav3">
        <?php
        include_once("./ejercicio3.php");
        ?>
    </div>
    <div class="tab-pane fade" id="tav4">
        <?php
        include_once("./ejercicio4.php");
        ?>
    </div>
    <div class="tab-pane fade" id="tav5">
        <?php
        include_once("./ejercicio5.php");
        ?>
    </div>
    <div class="tab-pane fade" id="tav6">
        <?php
        include_once("./ejercicio6.php");
        ?>
    </div>
</div>



<?php

include_once("../../footer.php");
?>