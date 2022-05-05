d = document;
w = window;

header = d.getElementById('header');
firstCol = d.getElementById('firstCol');
secondCol = d.getElementById('secondCol');
thirdCol = d.getElementById('thirdCol');
firstFooter = d.getElementById('firstFooter');
secondFooter = d.getElementById('secondFooter');

widht = w.innerWidth;
console.log(widht);

w.addEventListener('resize', (e) => {
	e.preventDefault();
	widht = w.innerWidth;
	if (widht <= 768) {
		header.classList.replace('bg-success', 'bg-primary');
		firstCol.classList.add('text-start');
		secondCol.classList.add('text-end');
		firstCol.classList.replace('col-4', 'col-6');
		secondCol.classList.replace('col-4', 'col-6');
		thirdCol.classList.replace('col-4', 'row');
		thirdCol.classList.replace('bg-danger', 'bg-success');
	}
});

scroll = d.scroll;
console.log(scroll);
seleccionar()
function seleccionar(rutaimg) {
	switch (rutaimg) {
		case '../../img/endgame.jpg':
			var sel = document.getElementById('Avengers: Endgame');
			var contexto = metodoReutilizable();
			contexto.textContent = 'Avengers: Endgame';
			break;
		case '../../img/interestellar.jpg':
			var sel = document.getElementById('Interestellar');
			var contexto = metodoReutilizable();
			contexto.textContent = "Interestellar";
			break;
		case '../../img/arcane.jpg':
			var sel = document.getElementById('Arcane');
			var contexto = metodoReutilizable();
			contexto.textContent = "Arcane";
			break;
		case '../../img/madmax.jpg':
			var sel = document.getElementById('Mad Max: Fury Road');
			var contexto = metodoReutilizable();
			contexto.textContent = 'Mad Max: Fury Road';
			break;
		case '../../img/morbius.jpg':
			var sel = document.getElementById('Morbius');
			var contexto = metodoReutilizable();
			contexto.textContent = 'Morbius';
			break;
		case '../../img/taboo.jpg':
			var sel = document.getElementById('Taboo');
			var contexto = metodoReutilizable();
			contexto.textContent = 'Taboo';
			break;
		case '../../img/peakyblinders.jpg':
			var sel = document.getElementById('Peaky Blinders');
			var contexto = metodoReutilizable();
			contexto.textContent = 'Peaky Blinders';
			break;
		case '../../img/spiderman-no_way_home.jpg':
			var sel = document.getElementById('Spiderman: No Way Home');
			var contexto = metodoReutilizable();
			contexto.textContent = 'Spiderman: No Way Home';
			break;
		case '../../img/batman.jpg':
			var sel = document.getElementById('Batman');
			var contexto = metodoReutilizable();
			contexto.textContent = 'Batman';
			break;
		case '../../img/theflash.jpg':
			var sel = document.getElementById('The Flash');
			var contexto = metodoReutilizable();
			contexto.textContent = 'The Flash';
			break;
		case '../../img/uncharted.jpg':
			var sel = document.getElementById('Uncharted: Fuera del Mapa');
			var contexto = metodoReutilizable();
			contexto.textContent = 'Uncharted: Fuera del Mapa';
			break;
		case '../../img/encanto.jpg':
			var sel = document.getElementById('Encanto');
			var contexto = metodoReutilizable();
			contexto.textContent = 'Encanto';
			break;
	}
	function metodoReutilizable() {
		desmarcar();
		//Cambia la clase de las tabs para activarlas
		sel.setAttribute(
			'class',
			'list-group-item list-group-item-action active'
		);
		//Muestra la imagen maximizada
		var imagen = document.getElementById('imagenMax');
		imagen.setAttribute('src', rutaimg);
		//Selecciona el elemento donde se va a imprimir el contexto o explicacion de la imagen a mostrar
		var contexto = document.getElementById('contexto');
		return contexto;
	}
	function desmarcar() {
		var arrayElementos = document.getElementsByClassName('list-group-item list-group-item-action active');
		for (let i = 0; i < arrayElementos.length; i++) {
			arrayElementos[i].setAttribute(
				'class',
				'list-group-item list-group-item-action'
			);
		}
	}
}
sinopsis()
function sinopsis(pelicula) {
	switch (pelicula) {
		case "encanto":
			var sel = document.getElementById('sinopsis');
			sel.textContent = 'Una joven colombiana puede ser la última esperanza para su familia, cuando descubre que la magia que rodea a Encanto, un lugar encantado que bendice a los niños con dones únicos, se encuentra en serio peligro.';
			break;
		
		case "endgame":
			var sel = document.getElementById('sinopsis');
			sel.textContent = 'Después de los eventos devastadores de "Avengers: Infinity War", el universo está en ruinas debido a las acciones de Thanos, el Titán Loco. Con la ayuda de los aliados que quedaron, los Vengadores deberán reunirse una vez más para intentar detenerlo y restaurar el orden en el universo de una vez por todas.';
			break;
		case "interestellar":
			var sel = document.getElementById('sinopsis');
			sel.textContent = 'Un grupo de científicos y exploradores, encabezados por Cooper, se embarcan en un viaje espacial para encontrar un lugar con las condiciones necesarias para reemplazar a la Tierra y comenzar una nueva vida allí.';
			break;
		case "spiderman":
			var sel = document.getElementById('sinopsis');
			sel.textContent = 'Tras descubrirse la identidad secreta de Peter Parker como Spider-Man, la vida del joven se vuelve una locura. Peter decide pedirle ayuda al Doctor Extraño para recuperar su vida. Pero algo sale mal y provoca una fractura en el multiverso.';
			break;
		case "madmax":
			var sel = document.getElementById('sinopsis');
			sel.textContent = 'Tras la guerra termonuclear que ha convertido a la Tierra en un páramo, el antiguo policía Max Rockatansky, atormentado por los espíritus de aquellos a los que no pudo proteger, se ha convertido en un hombre con un solo instinto: sobrevivir.';
			break;
	}
}
