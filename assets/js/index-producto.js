import { service } from "./service.js";

//creando tarjeta para index
const crearNueva = (url, nombreProducto, costo, descripcion, habitaciones, parqueos, metros, id) => {


    const tarjeta = document.createElement('div');
    const contenedor = `
<div class="caja-inmobiliaria" style="background-image:url(${url}); background-position: center;">
      <div class="caja-contenido" >

              <img src="./assets/img/desplazar.png" class="desplazar" onclick="desplazar(id=${id})" alt="desplazar" data-desplazar>

             <div class="cabecera">
                  <h3 class="nombre contenido-cabecera">${nombreProducto}</h3>

                      <p class="costo contenido-cabecera">$${costo}</p>
                      
                   <p class="descripcion contenido-cabecera">${descripcion}
                   </p>
             </div> 

               <hr>

            <div class="cuerpo">
                <p class="texto">Habitaciones: ${habitaciones}</p>
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

        filtered.forEach(({ url, nombreProducto, costo, habitaciones, parqueos, metros, id }) => {

            const Tarjeta = crearNueva(url, nombreProducto, costo, descripcion, habitaciones, parqueos, metros, id);

            parent.appendChild(Tarjeta);
        });

    });


}).catch((error) => {
    alert('ocurrio un error');
});

/*
<div class="caja-motos articulo" style="background-image:url(${url}); background-position: center;">
    <div class="caja-contenido" >
        <h3>${nombreProducto}</h3>
        <p class="costo" >$${costo}</p>
        <hr>
        <a href="decripcion/?id=${id}" class="enlace">Ver inmueble</a>
    </div>
</div>*/