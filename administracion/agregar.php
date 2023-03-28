<?php

include("../dba/db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Agregar Productos-Biker Racer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/reset.css" rel="stylesheet">
    <link href="../assets/css/style-agregar.css" rel="stylesheet">
    <link href="../assets/css/style-index.css" rel="stylesheet">
    <link rel="icon" href="../assets/img/" type="image/x-icon">
</head>

<body>
    <header class="menu">
        <div class="container">

            <h1 class="titulo-menu"><img src="../assets/img/" class="goma"><a href="../index.php" class="titulo-menu">Biker Racer </a></h1>

    
            <nav class="lista-menu">
                <a class="enlace-menu" href="administracion.html">Volver</a>
            </nav>
        </div>
    </header>

    <main class="desarrollo">
        <div class="container">

            <section class="agregar">
                <div class="container">
                    <div class="agregados">
                        <h3 class="titulo-agregar">Agregar Producto</h3>
                        <form class="agregar-form" data-form-agregar>
                            <input class="agregar-input" type="url" name="url" id="url" placeholder="Url De La Imagen" required data-url>
                            <select class="agregar-input select" name="categoria" id="categoria" required data-categoria>
                            <option class="opciones">Selecciona</option>
                            <option class="opciones" value="1">Deportivas</option>
                            <option class="opciones" value="2">Harley Davison</option>
                            <option class="opciones" value="3">MotoCross</option>
            
                            </select>
                            <input class="agregar-input" type="text" name="nombre" id="nombre" placeholder="Nombre Del Producto" required data-nombre>
                            <input class="agregar-input" type="number" name="precio" id="precio" placeholder="Costo Del Producto" required data-costo>
                            <textarea class="agregar-input" rows="5" type="text " cols="40 " id="descripcion " name="descripcion" placeholder="Descripcion Del producto" required data-descripcion></textarea>
                            <button type="submit " id="agregar" class="agregar-boton">Agregar Producto</button>
                        </form>
                    </div>
                </div>
            </section>



        </div>
    </main>

    <footer>
 </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uuid/8.3.2/uuid.min.js" integrity="sha512-UNM1njAgOFUa74Z0bADwAq8gbTcqZC8Ej4xPSzpnh0l6KMevwvkBvbldF9uR++qKeJ+MOZHRjV1HZjoRvjDfNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="../assets/js/agregar-producto.js"></script>
</body>

</html>