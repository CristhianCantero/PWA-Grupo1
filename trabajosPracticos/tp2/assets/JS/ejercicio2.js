$(document).ready(function () {
    $('button.genero').on('click', function (e) {
        let genero = e.currentTarget.value;
        $.ajax({
            url: `https://api.themoviedb.org/3/discover/movie?api_key=25592f9c4f387e0b4e511d1d6af065b5&with_genres=${genero}&language=es-ES`,
            type: 'get',
            listadoPeliculas: { value: $(this).val() },
            success: function (listadoPeliculas) {
                let tarjetaPelicula = "";
                listadoPeliculas.results.forEach(function (pelicula) {
                    console.log(pelicula)
                    let nombrePelicula = pelicula.title;
                    let resumen = pelicula.overview;
                    let imagen = pelicula.backdrop_path;
                    tarjetaPelicula += '<div class="col-12 col-md-6 col-lg-4 col-xxl-3 m-2 card" style="width: 18rem;">';
                    tarjetaPelicula += '<img src="https://image.tmdb.org/t/p/w500/' + imagen + '" class="card-img-top" alt="">';
                    tarjetaPelicula += '<div class="card-body">';
                    tarjetaPelicula += '<h5 class="card-title">' + nombrePelicula + '</h5>';
                    tarjetaPelicula += '<p class="card-text">' + resumen + '</p>';
                    tarjetaPelicula += '</div>';
                    tarjetaPelicula += '</div>';
                    $('#myTabContent ').html(tarjetaPelicula);
                });
            },
            error: function () {
                alert('Hubo un error con la URL, favor de verificarla');
            },
        });
    });

});