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
            let availableTags = new Array();
            data.forEach((pais) => {
                availableTags.push(pais.descripcion);
            });
            $("#pais").autocomplete({
                source: availableTags,
                select: function (event, ui) {
                    console.log(ui);
                    let descripcion = ui.item.label;
                    let paises = new Array();
                    paises = document.getElementById("mostrarPaises").options;

                    console.log(paises);
                    var options = $('#mostrarPaises option');

                    var valor = $.map(options, function (option) {
                        let retorno;
                        if (option.label == descripcion) {
                            retorno = option.value
                        }
                        return retorno;
                    });

                    // Fuente: https://www.iteramos.com/pregunta/2948/como-obtener-todas-las-opciones-de-un-selecto-usando-jquery

                    $("#mostrarPaises option[value=" + valor + "]").attr("selected", true);
                    $("#mostrarPaises").trigger("change");

                    console.log(paises);
                    let texto = document.getElementById("estado");
                    texto.disabled = false;

                }
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
        let texto = document.getElementById("estado");
        texto.disabled = false;
        console.log(document.getElementById("mostrarPaises").value);
        $.ajax({
            url: "assets/consultasBD/estados.php?idpais=" + document.getElementById("mostrarPaises").value,
            type: "GET",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data) {
                $("#pais").on("keyup", function () {
                    $("#mostrarEstados").text("");
                    texto.disabled = true;
                    texto.value = "";
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
                
                $("#estado").on("keyup", function () {
                    $("#mostrarEstados").text("");
                    let estados = "";
                    let inputEstado = document.getElementById("estado").value.toLowerCase();
                    $.each(data, function (i, item) {
                        if (item.descripcion.toLowerCase().includes(inputEstado)) {
                            estados += `<option value='${item.id}'>${item.descripcion}</option>`;
                        }
                    });
                    console.log(estados);
                    $("#mostrarEstados").append(estados);
                });

                $("#estado").autocomplete({
                    source: availableTags,
                    select: function (event, ui) {
                        console.log(ui);
                        let descripcion = ui.item.label;
                        let estados = new Array();
                        estados = document.getElementById("mostrarEstados").options;
    
                        console.log(estados);
                        let options = $('#mostrarEstados option');
                        console.log(options);
                        let valor = $.map(options, function (option) {
                            let retorno;
                            if (option.label == descripcion) {
                                retorno = option.value
                            }
                            return retorno;
                        });
                        console.log(valor);
                        // Fuente: https://www.iteramos.com/pregunta/2948/como-obtener-todas-las-opciones-de-un-selecto-usando-jquery
    
                        $("#mostrarEstados option[value=" + valor + "]").attr("selected", true);
                        $("#mostrarEstados").trigger("change");
    
                        console.log(estados);
                        let texto = document.getElementById("estado");
                        texto.disabled = false;
    
                    }
                });

            },
            error: function (error) {
                console.log(error);
            },
        });
    });

});