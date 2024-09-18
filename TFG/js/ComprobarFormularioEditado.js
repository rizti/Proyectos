const formulario = document.getElementById("formularioPerfil");
const enviar = document.getElementById("enviarCambios");
const expNombreUs = /^([a-z0-9A-Z]+)$/gm;
enviar.addEventListener("click", function (e) {
    e.preventDefault();
    let datos = new FormData(formulario);
    console.log(datos.get('nombreUsuario'));
    console.log(datos.get('clave'));
    if (!datos.get('nombreUsuario').match(expNombreUs)) {
        Swal.fire({
            icon: 'warning',
            title: 'Nombre usuario no valido',
            showConfirmButton: false,
            timer: 1500
        })
    }else if (datos.get('clave').length === 0||datos.get('clave2').lenght===0) {
        Swal.fire({
            icon: 'warning',
            title: 'Rellene la contraseña',
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
    } else if(datos.get('nombreUsuario').length === 0){
        Swal.fire({
            icon: 'warning',
            title: 'Introduce algun nombre de usuario',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        fetch('./gui/cambiarDatosUsuario.php', {
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
               window.location="./perfil.php";
        }
        })
    }
})