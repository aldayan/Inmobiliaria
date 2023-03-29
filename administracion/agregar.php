<?php
session_start();
include("../dba/db.php");

$usuario = $_SESSION['correo'];
if(!isset($usuario)){

    header("location:../login/login.php");

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/" media="screen">
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    
    <title>Administracion | ADDE CAPITAL. S.A.</title>

    <link rel="icon" href="../assets/img/">

    <script src="https://kit.fontawesome.com/0f48d8c00d.js"></script>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark  fixed-top ">
        <div class="container">
            <a href="#" class="navbar-brand">
                <strong>ADDE CAPITAL. S.A.</strong>
            </a>

            <button type="button" class="navbar-toggler d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menú de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  d-md-none" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link " href="administracion.php">Usuarios Registrados</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="agregar.php">Agregar Inmuebles</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="publicaciones.php">Ver todas las publicaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../chat/chat.php">Chat</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../login/cerrar.php"> Cerrar sesión </a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-5">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="administracion.php">
                                <span data-feather="home">Usuarios Registrados</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="agregar.php">
                                <span data-feather="file"></span>Agregar Inmuebles
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="publicaciones.php">
                                <span data-feather="bar-chart-2"></span>Ver todas las publicaciones
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="../chat/chat.php">
                            <span data-feather="layers"></span>Chat
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="../login/cerrar.php">
                                <span data-feather="layers"></span>Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Agregar Inmueble</h1>
                </div>
        
                <section class="agregar">
                <div class="container">
                    <div class="agregados">
                 
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

            </main>
        </div>
    </div>

    <script type="module" src="../assets/js/agregar-producto.js">
    </script>
</body>

</html>
