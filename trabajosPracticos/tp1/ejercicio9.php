<?php
$Titulo = "Ejercicio 9";
include_once("../../header.php");
?>

<div class="container">
    <div class="m-2">
        <div>
            <div id="head-lg" class="d-lg-block d-xl-block d-none border border-5 border-white" style="background-color: #0DF205">
                <h2>Header</h2>
            </div>

            <div id="head-md" class="d-sm-block d-md-block d-lg-none d-xl-none d-none border border-5 border-white" style="background-color: lightblue;">
                <h2>Header</h2>
            </div>

            <div id="head-sm" class="d-sx-block d-sm-none d-lg-none d-xl-none d-md-none border border-5 border-white" style="background-color: #F2A97E;">
                <h2>Header</h2>
            </div>

        </div>
    </div>

    <div class="row m-2">
        <div id="columna-1" class="col-lg-4 col-md-6 col-sm-6 col-xs-12 border border-5 border-white">
            <p>1</p>
        </div>
        
        <div id="columna-2" class="col-lg-4 col-md-6 col-sm-6 col-xs-12 border border-5 border-white ">
            <p>2</p>
        </div>


        <div id="columna-3" class="col-lg-4 col-md-12 col-sm-12 col-xs-12 border border-5 border-white ">
            <p>3</p>
        </div>

    </div>

    <div class="row m-2 ">
        <div id="footer-1" class="col-lg-6 col-sm-12 col-md-12 border border-5 border-white  ">
            <h2>Footer 1</h2>
        </div>
        <div id="footer-2" class="col-lg-6 col-sm-12 col-md-12 border border-5 border-white ">
            <h2>Footer 2</h2>
        </div>
    </div>

</div>

<?php

include_once("../../footer.php");
?>