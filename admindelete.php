<?php
session_start();
$varsession = $_SESSION['usuario'];
$sessionID = $_SESSION['id'];
include("conexiondb.php");
if(!$conn){
    die("La conexion fallo: ". mysqli_connect_error());
}else{
    $primernombre = $_GET['primernombre'];
    $segundonombre = $_GET['segundonombre'];
    $tercernombre = $_GET['tercernombre'];
    $primerapellido = $_GET['primerapellido'];
    $segundoapellido = $_GET['segundoapellido'];
    $telefono = $_GET['telefono'];
    $grado = $_GET['grado'];
    $carrera = $_GET['carrera'];
    $id =$_GET['id'];
    
   
    
}
    $sql2 = "INSERT INTO historial (primernombre, segundonombre,tercernombre,primerapellido, segundoapellido, telefono, grado, carrera, fk_alumnos, fk_administracion, administracion_usuario, action)
    VALUE ('$primernombre', '$segundonombre', '$tercernombre', '$primerapellido', '$segundoapellido', '$telefono','$grado','$carrera', '$id','$sessionID','$varsession', 'Eliminó un alumno'   )";

    if(mysqli_query($conn, $sql2)){
        include("eliminar.php");
        header("Location: listado.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }

?>