<?php
$Titulo = "Ejercicio 10";
include_once("../../header.php");
?>


<div class="container">
    <div class="row">
        <div id="header" class="col p-2 border border-5 border-white" style="background-color: greenyellow;" align="center">
            <span>Header</span>
        </div>
    </div>

    <div class="row align-items-center pb-sm-1 pb-md-1">
        <div id="oculto1" class="col-3 pt-3 pb-3 d-lg-block d-none"> </div>
        <div id="1" class="col-md-3 col-sm-6 border border-5 border-white" style="background-color: lightblue; padding: 50px;" align="center"><span>1</span></div>
        <div id="2" class="col-md-3 col-sm-6 border border-5 border-white" style="background-color: lightblue; padding: 50px;" align="center"><span>2</span></div>
        <div id="oculto2" class="col-3 pt-3 pb-3 d-lg-block d-none"> </div>
        <div id="3" class="col-md-3 col-sm-6 border border-5 border-white" style="background-color: lightblue; padding: 50px;" align="center"><span>3</span></div>
        <div id="oculto3" class="col-3 pt-3 pb-3 d-lg-block d-none"> </div>
        <div id="oculto4" class="col-3 pt-3 pb-3 d-lg-block d-none"> </div>
        <div id="4" class="col-md-3 col-sm-6 border border-5 border-white" style="background-color: lightblue; padding: 50px;" align="center"><span>4</span></div>
    </div>

    <div class="row">
        <div id="tablet" class="col p-3 d-none d-md-block d-lg-none d-xl-none" style="background-color: lightskyblue;" align="center">
            <span>Tablet</span>
        </div>
    </div>

    <div class="row align-items-center pt-sm-1 pt-md-1">
        <div id="a" class="order-lg-4 col-sm-6 col-lg-3 border border-5 border-white" style="background-color: gray; padding: 50px;" align="center"><span>a</span></div>
        <div id="b" class="order-lg-3 col-sm-6 col-lg-3 border border-5 border-white" style="background-color: gray; padding: 50px;" align="center"><span>b</span></div>
        <div id="c" class="order-lg-2 col-sm-6 col-lg-3 border border-5 border-white" style="background-color: gray; padding: 50px;" align="center"><span>c</span></div>
        <div id="d" class="order-lg-1 col-sm-6 col-lg-3 border border-5 border-white" style="background-color: gray; padding: 50px;" align="center"><span>d</span></div>
    </div>

    <div class="row pt-1 ">
        <div id="desktop" class="col p-3 d-lg-block d-none border border-5 border-white" style="background-color: lightskyblue;" align="center">
            <span>Desktop</span>
        </div>
    </div>
    <div class="row pt-1">
        <div id="mobile" class="col p-3 d-sm-block d-xs-block d-md-none d-lg-none d-xl-none border border-5 border-white" style="background-color: lightskyblue;" align="center">
            <span>Mobile</span>
        </div>
    </div>
    <div class="row justify-content-center pt-sm-1 pt-md-1">
        <div id="carita-feliz" class="order-lg-2 col-md-6 col-lg-3 col border border-5 border-white" style="background-color: orange; padding: 50px;" align="center"><span>:D</span></div>
        <div id="carita-triste" class="order-lg-1 col-sm-6 col-md-6 col-lg-3 d-none d-lg-block d-md-block border border-5 border-white" style="background-color: orange; padding: 50px;" align="center"><span>:(</span></div>
    </div>

    <div class="row pt-1">
        <div id="footer" class="col p-3 d-lg-block d-md-block d-none border border-5 border-white" style="background-color: greenyellow;" align="center">
            <span>Footer</span>
        </div>
    </div>

</div>



</div>

<?php

include_once("../../footer.php");
?>