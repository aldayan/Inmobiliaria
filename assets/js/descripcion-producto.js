import { service } from "./service.js";



const obtenerInformacion = () => {

    const ur = new URL(window.location);
    const id = ur.searchParams.get("id");


    if (id == null) {
        window.location.href = "/index.html";
    }
    const url = document.querySelector('[data-url');
    const nombreProducto = document.querySelector('[data-nombre]');
    const ubicacion= document.querySelector('[data-ubicacion]');
    const costo = document.querySelector('[data-costo]');
    const descripcion= document.querySelector('[data-descripcion]');
    const habitaciones = document.querySelector('[data-habitacion]');
    const baños= document.querySelector('[data-baños]');
    const parqueos = document.querySelector('[data-parqueos]');
    const metros= document.querySelector('[data-metros]');
   


    service.detalleProducto(id).then((perfil) => {

       url.src=perfil.url;
       nombreProducto.value = perfil.nombreProducto;
       ubicacion.value = perfil.ubicacion;
       costo.value = perfil.costo;
       descripcion.value = perfil.descripcion; 
       habitaciones.value = perfil.habitaciones;
       baños.value = perfil.baños; 
       parqueos.value = perfil.parqueos;
       metros.value = perfil.metros;
      



    });


};

obtenerInformacion();

