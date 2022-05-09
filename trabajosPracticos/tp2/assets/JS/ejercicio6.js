$(document).ready(function () {
    $.ajax({
        url: "assets/consultasBD/paises.php",
        type: "GET",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            console.log(data);
            $("#pais").on("keyup", function () {
                $("#mostrarPaises").text("");
                let paises = "<option>Seleccione</option>";
                let inputPais = document.getElementById("pais").value.toLowerCase();
                $.each(data, function (i, item) {
                    if (item.descripcion.toLowerCase().includes(inputPais)) {
                        paises += `<option value='${item.id}'>${item.descripcion}</option>`;
                    }
                });
                console.log(paises);
                $("#mostrarPaises").append(paises);
            });
        },
        error: function muestraError(err) {
            console.log(err);
        },
    });

    $.ajax({
        url: "assets/consultasBD/estados.php?idpais=" + document.getElementById("mostrarPaises").value,
        type: "GET",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            console.log(data);
            let availableTags = new Array();
            data.forEach((estado) => {
                availableTags.push(estado.descripcion);
            });
            $("#estado").autocomplete({
                source: availableTags
            });
        }
    });


    $("#mostrarPaises").on("change", function () {
        console.log(document.getElementById("mostrarPaises").value);
        $.ajax({
            url: "assets/consultasBD/estados.php?idpais=" + document.getElementById("mostrarPaises").value,
            type: "GET",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data) {
                $("#pais").on("keyup", function () {
                    $("#mostrarEstados").text("");
                });
                console.log(data);
                $("#mostrarEstados").text("");
                let estados;
                data.forEach((estado) => {
                    estados += `<option value='${estado.id}'>${estado.descripcion}</option>`;
                });
                $("#mostrarEstados").append(estados);
                let availableTags = new Array();
                data.forEach((estado) => {
                    availableTags.push(estado.descripcion);
                });
                $("#estado").autocomplete({
                    source: availableTags
                });
            },
            error: function (error) {
                console.log(error);
            },
        });
    });

});