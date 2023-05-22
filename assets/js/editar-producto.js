import { service } from "./service.js";


//editando producto
const formulario = document.querySelector('[data-form-editar]');

const obtenerInformacion = () => {

    const ur = new URL(window.location);
    const id = ur.searchParams.get("id");


    if (id == null) {
        window.location.href = "publicaciones.html";
    }

    const url = document.querySelector('[data-url]');
    const categoria = document.querySelector('[data-categoria]');
    const nombreProducto = document.querySelector('[data-nombre]');
    const hablar= document.querySelector('[data-habla]');
    const costo = document.querySelector('[data-costo]');
    const descripcion = document.querySelector('[data-descripcion]');
    const caracteristicas= document.querySelector('[data-caracteristicas]');
    const habitaciones= document.querySelector('[data-habitaciones]');
    const parqueos = document.querySelector('[data-parqueos]');
    const metros = document.querySelector('[data-metros]');

    service.detalleProducto(id).then((perfil) => {

        url.value = perfil.url;
        categoria.value = perfil.categoria;
        nombreProducto.value = perfil.nombreProducto;
        costo.value = perfil.costo;
        hablar.value=perfil.hablar;
        descripcion.value = perfil.descripcion;
        caracteristicas.value=perfil.caracteristicas;
        habitaciones.value=perfil.habitaciones;
        parqueos.value=perfil.parqueos;
        metros.value=perfil.metros;

    });


};

obtenerInformacion();


formulario.addEventListener('submit', (evento) => {
    evento.preventDefault();

    const ur = new URL(window.location);
    const id = ur.searchParams.get("id");

    const url = document.querySelector('[data-url]').value;
    const categoria = document.querySelector('[data-categoria]').value;
    const nombreProducto = document.querySelector('[data-nombre]').value;
    const costo = document.querySelector('[data-costo]').value;
    const hablar= document.querySelector('[data-habla]').value;
    const descripcion = document.querySelector('[data-descripcion]').value;
    const caracteristicas= document.querySelector('[data-caracteristicas]').value;
    const habitaciones= document.querySelector('[data-habitaciones]').value;
    const parqueos = document.querySelector('[data-parqueos]').value;
    const metros = document.querySelector('[data-metros]').value;


    service.actualizarProducto(url, categoria, nombreProducto, costo, hablar, descripcion, caracteristicas,  habitaciones, parqueos, metros, id).then(() => {
        window.location.href = 'publicaciones.html';
    })
});