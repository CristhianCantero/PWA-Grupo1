// Si previamente habia ingresado un valor no valido, esta funcion va a cambiar el color del input al base
function cambiarColor(campo){
    campo.style.borderColor="green";
}
// Esta funcion resetea el formulario para poder ingresar nuevos valores
function borrarFormulario(){
    // PRIMERA OPCION
    // document.getElementById("txtNombre").value ="";
    // document.getElementById("txtApellido").value ="";
    // document.getElementById("correoElectronico").value ="";
    // document.getElementById("nroTelefono").value ="";
    // document.getElementById("fecha").value ="";
    // document.getElementById("txtMarca").value ="";
    // document.getElementById("txtVehiculo").value ="";
    // document.getElementById("txtAnio").value ="";
    // document.getElementById("txtPatente").value ="";
    // document.getElementById("txtChasis").value ="";
    // document.getElementById("checkasegurado").checked = false;
    // document.getElementById("aseguradora").value = 0;
    // document.getElementById("nroSiniestro").value ="";
    // // document.getElementById("fechaSiniestro").value ="";
    // document.getElementById("archivo[]").value = "";
    // document.getElementById("asegurado").style = "display: none;";
    // document.getElementById("checkparticular").checked = false;
    // // document.getElementById("fechaParticular").value ="";
    // document.getElementById("archivoParticular[]").value = "";
    // document.getElementById("particular").style = "display: none;";

    // SEGUNDA OPCION
    location.replace('../solicitud_presupuesto.html');
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

    // Validacion campo correoElectronico
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
    // Fecha actual del dispositivo
    fechaActual = new Date();
    diaActual = fechaActual.getDate();
    mesActual = fechaActual.getMonth()+1;
    anioActual = fechaActual.getFullYear();
    // Fecha ingresada en el input del formulario
    fechaFormArray = campo.value.split("-");
    anioForm = fechaFormArray[0];
    mesForm = fechaFormArray[1];
    diaForm = fechaFormArray[2];

    if(campo.value == ""){
        campo.style.borderColor="red";
        alert("Debe ingresar una fecha valida");
        formValido = false;
    }else{
        // LAS FECHAS DEBEN DE SER LAS MISMAS PARA PODER SEGUIR CON LA SOLICITUD DE PRESUPUESTO
        // NO SE PUEDE HACER LA SOLICITUD CON UNA FECHA DISTINTA A LA FECHA ACTUAL DEL DISPOSITIVO
        if(anioForm == anioActual && mesForm == mesActual && diaForm == diaActual){
            cambiarColor(campo);
        }else{
            campo.style.borderColor="red";
            alert("No se puede ingresar un fecha distinta a "+diaActual+"/"+mesActual+"/"+anioActual);
            formValido = false;
        }
    }

    // Validacion campo marca
    campo = document.getElementById("txtMarca");
    if(campo.value == ""){
        campo.style.borderColor="red";
        formValido = false;
        // alert("Debe ingresar la marca de su vehiculo");
    }else{
        cambiarColor(campo);
    }

    // Validacion campo Vehiculo
    campo = document.getElementById("txtVehiculo");
    if(campo.value == ""){
        campo.style.borderColor="red";
        formValido = false;
        // alert("Debe ingresar su vehiculo");
    }else{
        cambiarColor(campo);
    }

    // Validacion campo Anio
    campo = document.getElementById("txtAnio");
    if(campo.value == "" || isNaN(campo.value)){
        campo.style.borderColor="red";
        formValido = false;
        // alert("Debe ingresar el año de su vehiculo");
    }else{
        cambiarColor(campo);
    }

    // Validacion campo Patente
    campo = document.getElementById("txtPatente");
    if(campo.value == ""){
        campo.style.borderColor="red";
        formValido = false;
        // alert("Debe ingresar la patente de su vehiculo");
    }else{
        cambiarColor(campo);
    }

    // Validacion campo Chasis
    campo = document.getElementById("txtChasis");
    if(campo.value == ""){
        campo.style.borderColor="red";
        formValido = false;
        // alert("Debe ingresar el chasis de su vehiculo");
    }else{
        cambiarColor(campo);
    }

    campoAsegurado = document.querySelector('#checkasegurado').checked;
    campoParticular = document.querySelector('#checkparticular').checked;
    // SI EL CHECKBOX SELECCIONADO ES ASEGURADO SE VERIFICA LOS CAMPOS OCULTOS

    if(!campoAsegurado && !campoParticular){
        alert("DEBE ELEGIR UN TIPO DE PRESUPUESTO");
        formValido = false;
    }else{
        if(campoAsegurado){
            // alert("usted eligio el campo asegurado");
            campo = document.getElementById('aseguradora');
            if(campo.value==0){
                campo.style.borderColor="red";
                formValido = false;
                // alert("Selecciona una aseguradora");
            }else{
                cambiarColor(campo);
            }
            
            campo = document.getElementById("nroSiniestro");
            if(campo.value == ""){
                campo.style.borderColor="red";
                formValido = false;
                // alert("Debe ingresar el numero de siniestro brindado por su compañia");
            }else{
                cambiarColor(campo);
            }

            // Obtener nombre de archivo
            let archivo = document.getElementById('archivo[]').value;
            // Obtener extensión del archivo
            extension = archivo.substring(archivo.lastIndexOf('.'),archivo.length);
            // Si la extensión obtenida no está incluida en la lista de valores
            // del atributo "accept", mostrar un error.
            if(document.getElementById('archivo[]').getAttribute('accept').split(',').indexOf(extension) < 0) {
                alert('Archivo inválido. No se permite la extensión ' + extension);
                formValido = false;
                campo.style.borderColor="red";
            }else{
                cambiarColor(campo);
            }

        }else{
            // Obtener nombre de archivo
            let archivo = document.getElementById('archivoParticular[]').value;
            // Obtener extensión del archivo
            extension = archivo.substring(archivo.lastIndexOf('.'),archivo.length);
            // Si la extensión obtenida no está incluida en la lista de valores
            // del atributo "accept", mostrar un error.
            if(document.getElementById('archivoParticular[]').getAttribute('accept').split(',').indexOf(extension) < 0) {
                alert('Archivo inválido. No se permite la extensión ' + extension);
                formValido = false;
                campo.style.borderColor="red";
            }else{
                cambiarColor(campo);
            }
            
        }
        return formValido;
    }
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
        alert("Su solicitud ha sido enviada con exito, le estaremos enviando su presupuesto a la brevedad o nos contactaremos por el medio que nos proporciono. Gracias que tenga un buen dia!");
        borrarFormulario();
    }else{
        alert("Hay algunos campos incompletos en su formulario, por favor, completarlas");
    }
}