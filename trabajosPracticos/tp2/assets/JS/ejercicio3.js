$(document).ready(function () {
    $('li#imagenes').on('click', function (e) {
        let idPelicula = e.currentTarget.value;
        $.ajax({
            url: `https://api.themoviedb.org/3/movie/${idPelicula}?api_key=25592f9c4f387e0b4e511d1d6af065b5&language=es-ES`,
            type: 'get',
            listadoPeliculas: { value: $(this).val() },
            success: function (listadoPeliculas) {
                // console.log(listadoPeliculas)
                let nombrePelicula = listadoPeliculas.title;
                let resumen = listadoPeliculas.overview;
                $('.titulo').text(nombrePelicula);
                $('.sinopsis').text(resumen)
            },
            error: function () {
                alert('Hubo un error con la URL, favor de verificarla');
            },
        });
    });

});