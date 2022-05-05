// Si previamente habia ingresado un valor no valido, esta funcion va a cambiar el color del input al base
function cambiarColor(campo){
    campo.style.borderColor="";
}
// Esta funcion resetea el formulario para poder ingresar nuevos valores
function borrarFormulario(){
    document.getElementById("txtNombre").value ="";
    document.getElementById("txtApellido").value ="";
    document.getElementById("correoElectronico").value ="";
    document.getElementById("nroTelefono").value ="";
    document.getElementById("fecha").value ="";
    document.getElementById("textAreaMotivo").value ="";
}
// Esta funcion valida el formulario
function validarFormulario(){
    // inicializo las variables campo para recibir el valor del input y formValido con un valor booleano para poder almacenar
    var campo, formValido;
    formValido = true;
    // Validacion campo nombre
    // Extraigo el valor del campo
    campo = document.getElementById("txtNombre");
    // Verifico si el campo esta vacio
    if(campo.value == ""){
        // Cambio el estilo del borde a rojo
        campo.style.borderColor="red";
        // Establezco la variable en falsa para decir que el formulario no es valido
        formValido = false;
        // alert("Debe ingresar su nombre");
    }else{
        // Si el campo no esta vacio vuelvo a cambiar el color del campo al previo
        cambiarColor(campo);
    }

    // Validacion campo apellido
    campo = document.getElementById("txtApellido");
    if(campo.value == ""){
        campo.style.borderColor="red";
        formValido = false;
        // alert("Debe ingresar su apellido");
    }else{
        cambiarColor(campo);
    }

    campo = document.getElementById("correoElectronico");
    let regExp = new RegExp(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i);
    // let respuesta = regExp.test()
    if(campo.value == ""){
        campo.style.borderColor="red";
        // alert("Debe ingresar un correo electronico");
        formValido = false;
    }else{
        if(regExp.test(campo.value)){
            cambiarColor(campo);
        }else{
            alert("Correo mal formado, ingresar un correo electronico valido");
            campo.style.borderColor="red";
            formValido = false;
        }
    }

    // Validacion campo nroTelefono
    campo = document.getElementById("nroTelefono");
    if(campo.value == "" || isNaN(campo.value)){
        campo.style.borderColor="red";
        // alert("Debe ingresar un numero de telefono");
        formValido = false;
        
    }else{
        cambiarColor(campo);
    }

    // Validacion campo fecha
    campo = document.getElementById("fecha");
    // Fecha ingresada en el input del formulario
    fechaFormArray = campo.value.split("-");
    anioForm = fechaFormArray[0];
    mesForm = fechaFormArray[1]-1;
    diaForm = fechaFormArray[2];
    fechaFormulario = new Date(anioForm, mesForm, diaForm);
    // Fecha actual del dispositivo
    fechaActual = new Date();
    fechaActual.setHours(0,0,0,0);

    // alert("Fecha actual: "+fechaActual+" Fecha formulario: "+fechaFormulario);

    if(campo.value == ""){
        campo.style.borderColor="red";
        alert("Debe ingresar una fecha valida");
        formValido = false;
    }else{
        if(fechaFormulario<fechaActual){
            diaActual = fechaActual.getDate();
            mesActual = fechaActual.getMonth()+1;
            anioActual = fechaActual.getFullYear();
            alert("No se puede ingresar un fecha menor a "+diaActual+"/"+mesActual+"/"+anioActual);
            campo.style.borderColor="red";
            formValido = false;
        }else{
            cambiarColor(campo);
        }
    }
    
    // Validacion campo textAreaMotivo
    campo = document.getElementById("textAreaMotivo");
    if(campo.value == ""){
        campo.style.borderColor="red";
        formValido = false;
        // alert("Debe ingresar una opinion");
    }else{
        cambiarColor(campo);
    }
    return formValido;
}

// Funcion principal para realizar la verificacion
function Verificacion(){
    // Inicializo las variables a utilizar
    var validado;
    // Hago el llamado a la validacion de los formularios
    validado = validarFormulario();
    // Si la respuesta de la funcion es un true entonces entra a cargarlo en los divs correspondientes
    if(validado){
        // Extraigo los valores de los campos del formulario
        alert("Su consulta ha sido enviada con exito, nos contactaremos con usted a la brevedad. Gracias que tenga un buen dia!");
        borrarFormulario();
    }else{
        alert("Hay algunos campos incompletos en su formulario, por favor, completarlas");
    }
}