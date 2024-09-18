const formulario = document.getElementById("iniciarSesion");
const enviar = document.getElementById("entrar");
enviar.addEventListener("click", function (e) {
    e.preventDefault();
    let datos = new FormData(formulario);
    if (datos.get('usuario').length === 0) {
        Swal.fire({
            icon: 'warning',
            title: 'Rellene el usuario',
            showConfirmButton: false,
            timer: 1500
        })
    } else if (datos.get('clave').length === 0) {
        Swal.fire({
            icon: 'warning',
            title: 'Rellene la clave',
            showConfirmButton: false,
            timer: 1500
        })
    }else {
        fetch('./gui/iniciarSesion.php', {
            method: 'POST',
            body: datos,
            
        })
        .then(res => res.text())
        .then(result => {

            console.log(result);

            if(result=="True"){
            Swal.fire({
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            })
               window.location="./index.php";
        }else{
            Swal.fire({
                icon: 'warning',
                title: 'Correo o contraseña erroneas',
                showConfirmButton: false,
                timer: 1500
            })  
        }
        })
    }
})