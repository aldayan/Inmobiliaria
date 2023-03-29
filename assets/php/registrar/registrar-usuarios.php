<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$ubicacion=$_POST['ubicacion'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];


$i;
$campo = array(); 
if(strlen($cedula)!=11){ 
    array_push($campo,"la cedula debe tener 11 caracteres"); 
} if(strlen($telefono)!=10){ 
    array_push($campo,"el telefono debe tener 10 caracteres"); 
} 
if(count($campo)>0){ 
    echo"<div class='error'>"; 
    for($i = 0; $i < count($campo); $i++ ){ 
        echo"<li>".$campo[$i]."</i>"; 
    } 
}

//base de datos
$conexion=mysqli_connect("localhost:8111","root","","inmobiliaria");

$sql = "INSERT INTO formulario  VALUES (id,'$nombre','$apellido','$cedula','$telefono',
'$direccion','$ubicacion','$correo','$contraseña')";

$ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion));

 if ($ejecutar){

     echo "Datos guardados";
   
header("location:./../../../formularios/completado.php");

}
else {
   
    echo  "Hay un error";
}

?>

