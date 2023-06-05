const listaProducto = () => {
    return fetch('http://localhost:3000/inmobiliaria').then(respuesta => {
        return respuesta.json();
    });
};


//creando sesion
const crearSesion = (email, contraseña) => {
    return fetch('http://localhost:3000/inmobiliaria', {
        method: 'POST',

        body: JSON.stringify({
            email,
            contraseña,
            id: uuid.v4()
        }),
    });

};


//creando producto
const crearProducto = (url, url2, categoria, nombreProducto, ubicacion, costo, hablar, descripcion, caracteristicas, habitaciones, baños, parqueos, metros) => {
    return fetch('http://localhost:3000/inmobiliaria', {
        method: 'POST',
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            url,
            url2,
            categoria,
            nombreProducto,
            ubicacion,
            costo,
            hablar,
            descripcion,
            caracteristicas, 
            habitaciones, 
            baños,
            parqueos, 
            metros
        }),
    });

};


// eliminando producto

const eliminarProducto = (id) => {

    return fetch(`http://localhost:3000/inmobiliaria/${id}`, {

        method: 'DELETE'
    });
};



//detalle del producto

const detalleProducto = (id) => {
    return fetch(`http://localhost:3000/inmobiliaria/${id}`).then((respuesta) => respuesta.json()

    );
};



//actualizar producto

const actualizarProducto = (url,  url2, categoria, nombreProducto, ubicacion, costo, hablar, descripcion, caracteristicas, habitaciones, baños,  parqueos, metros, id) => {
    return fetch(`http://localhost:3000/inmobiliaria/${id}`, {
        method: 'PUT',

        headers: {
            "Content-Type": "application/json",
        },

        body: JSON.stringify({
            url,
            url2,
            categoria,
            nombreProducto,
            ubicacion,
            costo,
            hablar,
            descripcion,  
            caracteristicas, 
            habitaciones, 
            baños,
            parqueos, 
            metros

        }),

    }).then((respuesta) => respuesta).catch(err => console.log(err));

};



export const service = {
    listaProducto,
    crearSesion,
    crearProducto,
    eliminarProducto,
    detalleProducto,
    actualizarProducto


};