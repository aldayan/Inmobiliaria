import { service } from "./service.js";

const formulario = document.querySelector('[data-form-agregar]');

//agregando producto
formulario.addEventListener('submit', (evento) => {

    evento.preventDefault();

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


    service.crearProducto(url, categoria, nombreProducto, costo, hablar, descripcion, caracteristicas, habitaciones, parqueos, metros).then(() => {
        window.location.href = 'publicaciones.html';
    }).catch(err => console.log(err))
});