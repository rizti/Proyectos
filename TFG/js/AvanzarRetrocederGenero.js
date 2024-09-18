function onClick_PaginarMas() {
    document.getElementById("txtPag").value++;
    document.AvanzarRetrocederGenero.submit();
}

function onClick_PaginarMenos() {
    document.getElementById("txtPag").value--;
    if (document.getElementById("txtPag").value<0) document.getElementById("txtPag").value=0;
    document.AvanzarRetrocederGenero.submit();
}
