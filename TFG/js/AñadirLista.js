const formulario = document.getElementById("añadir");
const enviar = document.getElementById("añadirLista");

enviar.addEventListener("click", function (e) {
    e.preventDefault();
    let datos = new FormData(formulario);
        fetch('./gui/añadirMangaLista.php', {
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
        }else{
            Swal.fire({
                icon: 'warning',
                title: 'Este manga ya esta en su lista',
                showConfirmButton: false,
                timer: 1500
            })  
        }

            
        })
})

const formularioEliminar = document.getElementById("eliminar");
const deletear = document.getElementById("eliminarLista");

deletear.addEventListener("click", function (e) {
    e.preventDefault();
    let datos = new FormData(formularioEliminar);
        fetch('./gui/EliminarMangaLista.php', {
            method: 'POST',
            body: datos,
            
        })
        .then(res => res.text())
        .then(result => {
            console.log(result);
            if(result==false){
            Swal.fire({
                icon: 'success',
                title: 'Eliminado de la lista',
                showConfirmButton: false,
                timer: 1500
            })
        }else{
            Swal.fire({
                icon: 'warning',
                title: 'Este manga no esta en su lista',
                showConfirmButton: false,
                timer: 1500
            })  
        }

            
        })
})