const formulario = document.getElementById("modificarManga");
const enviar = document.getElementById("enviar");
const expcompro = /[a-z]+/gm
const expcomproTit = /[A-Z]+/gm

enviar.addEventListener("click", function (e) {
    e.preventDefault();
    let datos = new FormData(formulario);
    if (datos.get('titulo').length === 0) {
        Swal.fire({
            icon: 'warning',
            title: 'Rellene todos los datos',
            showConfirmButton: false,
            timer: 1500
        })
    } else if (!datos.get('titulo').match(expcomproTit)) {
        Swal.fire({
            icon: 'warning',
            title: 'Titulo válido',
            showConfirmButton: false,
            timer: 1500
        })
    } else if(!datos.get('descripcion').match(expcompro)){
        Swal.fire({
            icon: 'warning',
            title: 'Descripcion Erronea',
            showConfirmButton: false,
            timer: 1500
        })
        }else {
        fetch('./gui/modificarManga.php', {
            method: 'POST',
            body: datos,
            
        })
        .then(res => res.text())
        .then(result => {
            
            if(result=="False"){
            Swal.fire({
                icon: 'warning',
                title: 'Ya existe el titulo',
                showConfirmButton: false,
                timer: 1500
            })
               
            }else{
                Swal.fire({
                    icon: 'success',
                    title: 'Modificado Correctamente',
                    showConfirmButton: false,
                    timer: 1500
                })
                window.location="./Modificar.php"; 
            }
        })
    }
})