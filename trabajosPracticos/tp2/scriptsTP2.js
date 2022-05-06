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
    
    // Para poder cargar de forma automatica las peliculas, implementar mas adelante.
    // $('button#cargarPeliculas').on('click', function (e) {
    //     console.log("entre")
    //     $.ajax({
    //         url: `https://api.themoviedb.org/3/discover/movie?api_key=25592f9c4f387e0b4e511d1d6af065b5&language=es-ES`,
    //         type: 'get',
    //         listadoPeliculas: { value: $(this).val() },
    //         success: function (listadoPeliculas) {
    //             console.log(listadoPeliculas)
    //             let imagenes = "";
    //             listadoPeliculas.results.forEach(function (pelicula) {
    //                 console.log(pelicula)
    //                 let nombrePelicula = pelicula.title;
    //                 let poster = pelicula.poster_path;
    //                 let idPelicula = pelicula.id;
    //                 imagenes += `<li class="col-lg-1 col-md-2 col-sm-3 col-4 nav-item" id="imagenes" value="${idPelicula}">`;
    //                 imagenes += `<a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://image.tmdb.org/t/p/w342/${poster}" alt="${nombrePelicula}" height="150" width="100"></a>`;
    //                 imagenes += '</li>';
    //                 $('ul#peliculas').html(imagenes);
    //             });
    //         },
    //         error: function () {
    //             alert('Hubo un error con la URL, favor de verificarla');
    //         },
    //     });
    // });

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


