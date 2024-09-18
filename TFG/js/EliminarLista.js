const formulario = document.getElementById("eliminar");
const enviar = document.getElementById("eliminarLista");

enviar.addEventListener("click", function (e) {
    e.preventDefault();
    let datos = new FormData(formulario);
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
                title: 'Añadido a lista',
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