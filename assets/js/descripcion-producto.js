import { service } from "./service.js";



const obtenerInformacion = () => {

    const ur = new URL(window.location);
    const id = ur.searchParams.get("id");


    if (id == null) {
        window.location.href = "/index.html";
    }
    const url = document.querySelector('[data-url]');
    const url2 = document.querySelector('[data-url2]');
    const url3= document.querySelector('[data-url3]');
    const url4= document.querySelector('[data-url4]');  
    const url5 = document.querySelector('[data-url5]');
    const url6 = document.querySelector('[data-url6]');
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
       url2.src=perfil.url2;
       url3.src=perfil.url3;
       url4.src=perfil.url4;
       url5.src=perfil.url5;
       url6.src=perfil.url6;
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

