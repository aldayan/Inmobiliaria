import { service } from "./service.js";



const obtenerInformacion = () => {

    const ur = new URL(window.location);
    const id = ur.searchParams.get("id");


    if (id == null) {
        window.location.href = "/index.html";
    }

    const nombreProducto = document.querySelector('[data-nombre]');
    const ubicacion= document.querySelector('[data-ubicacion]');
   


    service.detalleProducto(id).then((perfil) => {

      
        nombreProducto.value = perfil.nombreProducto;
       ubicacion.value = perfil.ubicacion;
      



    });


};

obtenerInformacion();