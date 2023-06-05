import { service } from "./service.js";




//creando tarjeta para index
const crearNueva = (url, nombreProducto, costo, hablar, habitaciones, baños, parqueos,  metros, id) => {


    const tarjeta = document.createElement('div');
    const contenedor = `
    
<div class="caja-inmobiliaria articulo" style="background-image:url(${url}); background-position: center;">
      <div class="caja-contenido" >

     <a class="vinculo" href="descripcion/descripcion.html?id=${id}"><img src="./assets/img/desplazar.png" class="desplazar" onclick="desplazar()" alt="desplazar" data-desplazar></a> 

             <div class="cabecera">
                  <h3 class="nombre contenido-cabecera" >${nombreProducto}</h3>

                      <p class="costo contenido-cabecera">${costo}</p>
                      
                   <p class="descripcion contenido-cabecera">${hablar}</p>
             </div> 

               <hr>

            <div class="cuerpo">
                <p class="texto">Habitaciones: ${habitaciones}</p>
                <p class="texto">Baños: ${baños}</p>
                <p class="texto">Parqueos: ${parqueos}</p>
                <p class="texto">Metros: ${metros}</p>
            </div>
       
    
       </div>
</div>`

    tarjeta.innerHTML = contenedor;

    return tarjeta;
};



const cards = [{

    category: "data-venta",
    value: 1

}, {

    category: "data-alquilar",
    value: 2
}];






service.listaProducto().then((data) => {

    cards.forEach(c => {


        let parent = document.querySelectorAll(`[${c.category}]`)[0];

        const filtered = data.filter(ca => ca.categoria == c.value)

        filtered.forEach(({ url, nombreProducto, costo, hablar, habitaciones, baños, parqueos,  metros, id }) => {

            const Tarjeta = crearNueva(url, nombreProducto, costo, hablar,  habitaciones, baños, parqueos, metros, id);

            parent.appendChild(Tarjeta);
        });

    });


}).catch((error) => {
    alert('ocurrio un error');
});


