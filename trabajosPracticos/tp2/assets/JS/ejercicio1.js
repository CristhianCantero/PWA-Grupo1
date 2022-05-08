$(document).ready(function () {
    $('select#listadoGeneros').on('change', function (e) {
        let genero = e.currentTarget.value;
        $.ajax({
            url: `https://api.themoviedb.org/3/discover/movie?api_key=25592f9c4f387e0b4e511d1d6af065b5&with_genres=${genero}&language=es-ES`,
            type: 'get',
            listadoPeliculas: { value: $(this).val() },
            success: function (listadoPeliculas) {
                let listadoOpcionesPeliculas = "<option selected>Ver Peliculas...</option>";
                listadoPeliculas.results.forEach(function (pelicula) {
                    let nombrePelicula = pelicula.title;
                    let idPelicula = pelicula.id;
                    listadoOpcionesPeliculas += "<option value='" + idPelicula + "'>" + nombrePelicula + '</option>';
                });
                $('#listadoPeliculas').html(listadoOpcionesPeliculas);
            },
            error: function () {
                alert('Hubo un error con la URL, favor de verificarla');
            },
        });
    });
});