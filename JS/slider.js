const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider-section");
let sliderSectionLast = sliderSection[sliderSection.length - 1];

const btnIzquierda = document.querySelector("#btn-izquierda");
const btnDerecha = document.querySelector("#btn-derecha");

// coloca la ultima imagen al principio (para que se haga el efecto de infinito) basicamente seria un cambio de posicion
slider.insertAdjacentElement("afterbegin", sliderSectionLast);

function imagenSiguiente(){
    let sliderSectionFirst = document.querySelectorAll(".slider-section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement("beforeend", sliderSectionFirst);
        slider.style.marginLeft = "-100%";
    }, 500);
}

btnDerecha.addEventListener('click', function(){
    imagenSiguiente();
})

function imagenPrevia(){
    let sliderSection = document.querySelectorAll(".slider-section");
    let sliderSectionLast = sliderSection[sliderSection.length - 1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement("afterbegin", sliderSectionLast);
        slider.style.marginLeft = "-100%";
    }, 500);
}

btnIzquierda.addEventListener('click', function(){
    imagenPrevia();
})

setInterval(function(){
    imagenSiguiente();
}, 3000);




