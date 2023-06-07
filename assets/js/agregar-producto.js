import { service } from "./service.js";


const formulario = document.querySelector('[data-form-agregar]');


let img= document.querySelector('[data-url]');
let img2= document.querySelector('[data-url2]');
let img3= document.querySelector('[data-url3]');
let img4= document.querySelector('[data-url4]');
let img5= document.querySelector('[data-url5]');
let img6= document.querySelector('[data-url6]');

let url="";
let url2="";
let url3="";
let url4="";
let url5="";
let url6="";

img.addEventListener('change', function(e) {
    // Obtener los archivos seleccionados
    const files = e.target.files;

    // Recorrer los archivos
    for (let i = 0; i < files.length; i++) {
      const file = files[i];

      // Crear un objeto de tipo FileReader
      const reader = new FileReader();

      // Leer el archivo como una URL de datos
      reader.readAsDataURL(file);

      // Definir el evento onload del lector
      reader.onload = function(event) {
        url = event.target.result;

      };
    }
  });

  img2.addEventListener('change', function(e) {
    // Obtener los archivos seleccionados
    const files = e.target.files;

    // Recorrer los archivos
    for (let i = 0; i < files.length; i++) {
      const file = files[i];

      // Crear un objeto de tipo FileReader
      const reader = new FileReader();

      // Leer el archivo como una URL de datos
      reader.readAsDataURL(file);

      // Definir el evento onload del lector
      reader.onload = function(event) {
        url2 = event.target.result;

      };
    }
  });
 
  img3.addEventListener('change', function(e) {
    // Obtener los archivos seleccionados
    const files = e.target.files;

    // Recorrer los archivos
    for (let i = 0; i < files.length; i++) {
      const file = files[i];

      // Crear un objeto de tipo FileReader
      const reader = new FileReader();

      // Leer el archivo como una URL de datos
      reader.readAsDataURL(file);

      // Definir el evento onload del lector
      reader.onload = function(event) {
        url3 = event.target.result;

      };
    }
  });

  img4.addEventListener('change', function(e) {
    // Obtener los archivos seleccionados
    const files = e.target.files;

    // Recorrer los archivos
    for (let i = 0; i < files.length; i++) {
      const file = files[i];

      // Crear un objeto de tipo FileReader
      const reader = new FileReader();

      // Leer el archivo como una URL de datos
      reader.readAsDataURL(file);

      // Definir el evento onload del lector
      reader.onload = function(event) {
        url4 = event.target.result;

      };
    }
  });
 
  img5.addEventListener('change', function(e) {
    // Obtener los archivos seleccionados
    const files = e.target.files;

    // Recorrer los archivos
    for (let i = 0; i < files.length; i++) {
      const file = files[i];

      // Crear un objeto de tipo FileReader
      const reader = new FileReader();

      // Leer el archivo como una URL de datos
      reader.readAsDataURL(file);

      // Definir el evento onload del lector
      reader.onload = function(event) {
        url5 = event.target.result;

      };
    }
  });

  img6.addEventListener('change', function(e) {
    // Obtener los archivos seleccionados
    const files = e.target.files;

    // Recorrer los archivos
    for (let i = 0; i < files.length; i++) {
      const file = files[i];

      // Crear un objeto de tipo FileReader
      const reader = new FileReader();

      // Leer el archivo como una URL de datos
      reader.readAsDataURL(file);

      // Definir el evento onload del lector
      reader.onload = function(event) {
        url6= event.target.result;
      
      };
    }
  });
 
 
  
//agregando producto
formulario.addEventListener('submit', (evento) => {

    evento.preventDefault();

    
    const categoria = document.querySelector('[data-categoria]').value;
    const nombreProducto = document.querySelector('[data-nombre]').value;
    const ubicacion = document.querySelector('[data-ubicacion]').value;
    const costo = document.querySelector('[data-costo]').value;
    const hablar= document.querySelector('[data-habla]').value;
    const descripcion = document.querySelector('[data-descripcion]').value;
    const caracteristicas= document.querySelector('[data-caracteristicas]').value;
    const habitaciones= document.querySelector('[data-habitaciones]').value;
    const baños= document.querySelector('[data-baños]').value;
    const parqueos = document.querySelector('[data-parqueos]').value;
    const metros = document.querySelector('[data-metros]').value;
    console.log(categoria);

    service.crearProducto(url, url2, url3, url4, url5, url6, categoria, nombreProducto, ubicacion, costo, hablar, descripcion, caracteristicas, habitaciones, baños, parqueos, metros).then(() => {
        window.location.href = 'publicaciones.html';
    }).catch(err => console.log(err))
});

