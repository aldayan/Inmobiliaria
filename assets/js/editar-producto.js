import { service } from "./service.js";


//editando producto
const formulario = document.querySelector('[data-form-editar]');

const img= document.querySelector('[data-url]');
const url="";


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
  
const obtenerInformacion = () => {

    const ur = new URL(window.location);
    const id = ur.searchParams.get("id");


    if (id == null) {
        window.location.href = "publicaciones.html";
    }
   
    const categoria = document.querySelector('[data-categoria]');
    const nombreProducto = document.querySelector('[data-nombre]');
    const ubicacion = document.querySelector('[data-ubicacion]');
    const hablar= document.querySelector('[data-habla]');
    const costo = document.querySelector('[data-costo]');
    const descripcion = document.querySelector('[data-descripcion]');
    const caracteristicas= document.querySelector('[data-caracteristicas]');
    const habitaciones= document.querySelector('[data-habitaciones]');
    const baños= document.querySelector('[data-baños]');
    const parqueos = document.querySelector('[data-parqueos]');
    const metros = document.querySelector('[data-metros]');

    service.detalleProducto(id).then((perfil) => {

        
        categoria.value = perfil.categoria;
        nombreProducto.value = perfil.nombreProducto;
        ubicacion.value = perfil.ubicacion;
        costo.value = perfil.costo;
        hablar.value=perfil.hablar;
        descripcion.value = perfil.descripcion;
        caracteristicas.value=perfil.caracteristicas;
        habitaciones.value=perfil.habitaciones;
        baños.value=perfil.baños;
        parqueos.value=perfil.parqueos;
        metros.value=perfil.metros;

    });


};

obtenerInformacion();


formulario.addEventListener('submit', (evento) => {
    evento.preventDefault();

    const ur = new URL(window.location);
    const id = ur.searchParams.get("id");
    


  
    const categoria = document.querySelector('[data-categoria]').value;
    const nombreProducto = document.querySelector('[data-nombre]').value;
    const ubicacion = document.querySelector('[data-ubicacion]').value;
    const costo = document.querySelector('[data-costo]').value;
    const hablar= document.querySelector('[data-habla]').value;
    const descripcion = document.querySelector('[data-descripcion]').value;
    const caracteristicas= document.querySelector('[data-caracteristicas]').value;
    const habitaciones= document.querySelector('[data-habitaciones]').value;
    const baños = document.querySelector('[data-baños]').value;
    const parqueos = document.querySelector('[data-parqueos]').value;
    const metros = document.querySelector('[data-metros]').value;


    service.actualizarProducto(url, categoria, nombreProducto, ubicacion, costo, hablar, descripcion, caracteristicas,  habitaciones, baños, parqueos, metros, id).then(() => {
        window.location.href = 'publicaciones.html';
    })
});
