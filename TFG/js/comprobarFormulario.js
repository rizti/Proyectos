const formulario = document.getElementById("registrarUsuarios");
const enviar = document.getElementById("registrarse");
const expNombre = /^([a-zA-Z ]{1}[a-zA-Z ]+)$/gm;
const expApellido= /^([a-zA-Z ]{1}[a-zA-Z ]+)$/gm;
const expNombreUs = /^([a-z0-9A-Z]+)$/gm;
const expCorreo = /^[\w._-]+\@[\w.-]+\.[a-zA-Z]{2,4}$/gm;


enviar.addEventListener("click", function (e) {
    e.preventDefault();
    let datos = new FormData(formulario);

    if (!datos.get('usuario').match(expNombreUs)) {
        Swal.fire({
            icon: 'warning',
            title: 'Nombre usuario no valido',
            showConfirmButton: false,
            timer: 1500
        })
    } else if (!datos.get('nombre').match(expNombre)) {
        Swal.fire({
            icon: 'warning',
            title: 'Nombre no válido',
            showConfirmButton: false,
            timer: 1500
        })
    } else if(datos.get('clave')!=datos.get('clave2')){
        Swal.fire({
            icon: 'warning',
            title: 'Claves no identicas',
            showConfirmButton: false,
            timer: 1500
        })
    }else if (!datos.get('apellidos').match(expApellido)) {
        Swal.fire({
            icon: 'warning',
            title: 'Apellido no válido',
            showConfirmButton: false,
            timer: 1500
        })
    }else if(datos.get('politicaPrivacidad')==null){
        Swal.fire({
            icon: 'warning',
            title: 'Tiene que aceptar las politicas de privacidad',
            showConfirmButton: false,
            timer: 1500
        })
    }
    else if (!datos.get('correo').match(expCorreo)) {
            Swal.fire({
                icon: 'warning',
                title: 'Correo no válido',
                showConfirmButton: false,
                timer: 1500
            })
    }else {
        fetch('./gui/registrarUsuarios.php', {
            method: 'POST',
            body: datos,
            
        })
        .then(res => res.text())
        .then(result => {
            console.log(result);
            if(result==false){
            Swal.fire({
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            })
               window.location="./index.php";
        }else{
            Swal.fire({
                icon: 'warning',
                title: 'Correo en uso',
                showConfirmButton: false,
                timer: 1500
            })  
        }

            
        })
    }
})