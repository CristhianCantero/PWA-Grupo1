$(document).ready(function () {
    $.ajax({
        method: "GET",
        url: "assets/consultasBD/extraerContactos.php",
    }).done(function (data) {
        var contactos = "";
        $.each(data, function (ind, contacto) {
            contactos += `<tr><td>${contacto.Nombre}</td><td>${contacto.Empresa}</td><td>${contacto.Telefono}</td><td>${contacto.Mail}</td><td>${contacto.Comentario}</td></tr>`;
        });
        $("#tableBodyEjercicio5").append(contactos);
    });
});