import { service } from "./service.js";

//creando tarjeta para index
const crearNueva = (url, nombreProducto, costo, hablar, habitaciones, baños, parqueos,  metros, id) => {


    const tarjeta = document.createElement('div');
    const contenedor = `
<div class="caja-inmobiliaria articulo" style="background-image:url(${url}); background-position: center;">
      <div class="caja-contenido" >

      <img src="./assets/img/desplazar.png" class="desplazar" onclick="desplazar()" alt="desplazar" data-desplazar>

             <div class="cabecera">
                  <h3 class="nombre contenido-cabecera" >${nombreProducto}</h3>

                      <p class="costo contenido-cabecera">$${costo}</p>
                      
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



//creando tarjeta para index
const ventanaEmergente = (url, nombreProducto, ubicacion, costo,  descripcion, caracteristicas, habitaciones, baños, parqueos, metros, id) => {


    const tarjeta = document.createElement('div');
    const contenedor = `<section class="ventana-descripcion" data-ventana >
    <div class="ventana-emergente" data-emergente>

    <img src="./assets/img/cancelar.png" class="cancelar"  onclick="cancelar()"  alt="cancelar" data-cancelar>

    <div class="carrusel">

    </div>

    <div class="descripcion-general">
    
       <div class="encabezado-descripcion">

         <p class="titulo-inmueble ">${nombreProducto}</p>
         <p class="ubicacion-inmueble">${ubicacion}</p>
         <p class="costo-inmueble">US$${costo}</p>

       </div>

         
      

       <div class="caracteristicas-descripcion">
           
          <p class="caracteristica-titulo">Caracteristicas</p>
         
<div class="areas-inmueble">
 

         <ul class="area1">
                 <li class="areas" id="feature-area-de-juegos">Área de Juegos</li>
                 <li class="areas" id="feature-ascensor">Ascensor</li>
                 <li class="areas" id="feature-balcon">Balcón / Patio</li>
                 <li class="areas" id="feature-calentador-de-gas">Calentador de Gas</li>
                 <li class="areas" id="feature-camaras-de-seguridad">Cámaras de Seguridad</li>
                 <li class="areas" id="feature-cisterna">Cisterna</li>
          </ul>

          <ul class="area2">
                 <li class="areas" id="feature-cuarto-de-servicio">Cuarto de Servicio</li>
                 <li class="areas" id="feature-entrada-privada">Entrada Privada</li>
                 <li class="areas" id="feature-estar">Estar</li>
                 <li class="areas" id="feature-estudio">Estudio</li>
                 <li class="areas" id="feature-family-room">Family Room</li>
         </ul>
</div>
       
</div>

     


       <div class="partes-inmueble">
            
            <span class="parte">
             <p class="parte3">${habitaciones}</p>
             <p class="parte3">Habitaciones</p>
            </span>

            <span class="parte">
             <p class="parte3">${parqueos}</p>
             <p class="parte3">Parqueos</p>
            </span>

            <span class="parte">
             <p class="parte3">${baños}</p>
             <p class="parte3">Baños</p>
            </span>

            <span class="parte">
             <p class="parte3">${metros}</p>
             <p class="parte3">Metros</p>
            </span>

     
       </div>
    
       <div class="datos-descripcion">
     
          <p class="datos-titulo">Descripcion</p>

          <p class="datos">
             ${descripcion}
             </p>
       </div>

    </div>

    <div class="ofertas-similares">


     
    </div>

   </div>
</section>
`

    tarjeta.innerHTML = contenedor;

    return tarjeta;
};



const card = [{

    category: "data-venta",
    value: 1

}, {

    category: "data-alquilar",
    value: 2
}];





service.listaProducto().then((data) => {

    card.forEach(c => {


        let parent = document.querySelectorAll(`[${c.category}]`)[0];

        const filtered = data.filter(ca => ca.categoria == c.value)

        filtered.forEach(({ url, nombreProducto, ubicacion, costo, descripcion, caracteristicas,  habitaciones, baños, parqueos, metros, id }) => {

            const Tarjeta = ventanaEmergente(url, nombreProducto, ubicacion, costo, descripcion, caracteristicas, habitaciones, baños, parqueos, metros, id);

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
        <a href="index.php?id=${id}" class="enlace">Ver inmueble</a>
    </div>
</div>*/