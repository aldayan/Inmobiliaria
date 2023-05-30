import { service } from "./service.js";


const formulario = document.querySelector('[data-form-agregar]');


let img= document.querySelector('[data-url]');
let url="";


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
console.log(url);
      };
    }
  });

  console.log(img);
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


    service.crearProducto(url, categoria, nombreProducto, ubicacion, costo, hablar, descripcion, caracteristicas, habitaciones, baños, parqueos, metros).then(() => {
        window.location.href = 'publicaciones.html';
    }).catch(err => console.log(err))
});

