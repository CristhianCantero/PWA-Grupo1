$(document).ready(function () {
    load_data();
    function load_data(page) {
        $.ajax({
            url: "assets/consultasBD/extraerContactos.php",
            method: "POST",
            data: { page: page },
            success: function (data) {
                console.log(data)
                $("#tablaContactos").html(data);
            }
        })
    };

    $(document).on('click', '.pagination_link', function () {
        var page = $(this).attr("id");
        load_data(page);
    })
});