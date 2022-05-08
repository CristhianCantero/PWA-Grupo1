// Si previamente habia ingresado un valor no valido, esta funcion va a cambiar el color del input al base
function cambiarColor(campo) {
    campo.style.borderColor = "";
}
// Esta funcion resetea el formulario para poder ingresar nuevos valores
function borrarFormulario() {
    document.getElementById("nombre").value = "";
    document.getElementById("empresa").value = "";
    document.getElementById("telefono").value = "";
    document.getElementById("email").value = "";
    document.getElementById("comentarios").value = "";
}
// Esta funcion valida el formulario
function validarFormulario() {
    // inicializo las variables campo para recibir el valor del input y formValido con un valor booleano para poder almacenar
    var campo, formValido;
    formValido = true;
    // Validacion campo nombre
    // Extraigo el valor del campo
    campo = document.getElementById("nombre");
    // Verifico si el campo esta vacio
    if (campo.value == "") {
        // Cambio el estilo del borde a rojo
        campo.style.borderColor = "red";
        // Establezco la variable en falsa para decir que el formulario no es valido
        formValido = false;
        // alert("Debe ingresar su nombre");
    } else {
        // Si el campo no esta vacio vuelvo a cambiar el color del campo al previo
        cambiarColor(campo);
    }

    // Validacion campo empresa
    campo = document.getElementById("empresa");
    if (campo.value == "") {
        campo.style.borderColor = "red";
        formValido = false;
        // alert("Debe ingresar su empresa");
    } else {
        cambiarColor(campo);
    }

    campo = document.getElementById("email");
    let regExp = new RegExp(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i);
    // let respuesta = regExp.test()
    if (campo.value == "") {
        campo.style.borderColor = "red";
        // alert("Debe ingresar un correo electronico");
        formValido = false;
    } else {
        if (regExp.test(campo.value)) {
            cambiarColor(campo);
        } else {
            alert("Correo mal formado, ingresar un correo electronico valido");
            campo.style.borderColor = "red";
            formValido = false;
        }
    }

    // Validacion campo telefono
    campo = document.getElementById("telefono");
    if (campo.value == "" || isNaN(campo.value)) {
        campo.style.borderColor = "red";
        // alert("Debe ingresar un numero de telefono");
        formValido = false;

    } else {
        cambiarColor(campo);
    }

    // Validacion campo comentarios
    campo = document.getElementById("comentarios");
    if (campo.value == "") {
        campo.style.borderColor = "red";
        formValido = false;
        // alert("Debe ingresar una comentarios");
    } else {
        cambiarColor(campo);
    }
    return formValido;
}

function validarCorreo(email, informacionUsuario) {
    $.ajax({
        method: "GET",
        url: "validarCorreo.php",
    }).done(function (data) {
        var existe = false;
        $.each(data, function (ind, mail) {
            if(email === mail['Mail']){
                existe = true;
            }
        });
        if(!existe){
            cargarFormulario(informacionUsuario);
            borrarFormulario();
        }else{
            alert("El correo ya existe en la base de datos, favor de registrarse con otro. Muchas gracias!")
            campo = document.getElementById("email");
            campo.style.borderColor = "red";
        }
    });
}

function cargarFormulario(informacionUsuario) {
    var xmlhttp;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            alert("Se ha cargado correctamente al contacto.");
        }
    }

    xmlhttp.open("POST", "subidaServidorEj4.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(informacionUsuario);
}

// Funcion principal para realizar la verificacion
function Verificacion() {
    // Inicializo las variables a utilizar
    var validado;
    var nombre = document.getElementById("nombre").value;
    var empresa = document.getElementById("empresa").value;
    var telefono = document.getElementById("telefono").value;
    var email = document.getElementById("email").value;
    var comentarios = document.getElementById("comentarios").value;

    var informacionUsuario = "nombre=" + nombre + "&empresa=" + empresa + "&telefono=" + telefono + "&email=" + email + "&comentarios=" + comentarios;

    // Hago el llamado a la validacion de los formularios
    validado = validarFormulario();
    // Si la respuesta de la funcion es un true entonces entra a cargarlo en los divs correspondientes
    if (validado) {
        validarCorreo(email, informacionUsuario)
    } else {
        alert("Hay algunos campos incompletos en su formulario, por favor, completarlas");
    }
}
