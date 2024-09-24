
//Ejecutando funciones
document.getElementById("icon-ubicacion").addEventListener("click", mostrar_ubicacion);
document.getElementById("cover-ctn-ubicacion").addEventListener("click", ocultar_ubicacion);

//Declarando variables
bars_ubicacion =       document.getElementById("ctn-bars-ubicacion");
cover_ctn_ubicacion =  document.getElementById("cover-ctn-ubicacion");
iframeUb =       document.getElementById("iframeubicacion");
box_ubicacion =        document.getElementById("box-ubicacion");


//Funcion para mostrar el buscador
function mostrar_ubicacion(){

    bars_ubicacion.style.top = "500px";
    cover_ctn_ubicacion.style.display = "block";
    iframeUb.focus();

}

//Funcion para ocultar el buscador
function ocultar_ubicacion(){

    bars_ubicacion.style.top = "-500px";
    cover_ctn_ubicacion.style.display = "none";
    iframeUb.value = "";
    

}

