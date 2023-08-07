<?php 
include("sesion.php");
include("conexiondb.php");
if(!$conn){
    die("La conexión fallo: " . mysqli_connect_error());
}else{
    $clave = $_POST['clave'];
    $Pnombre = $_POST['Pnombre'];
    $Snombre = $_POST['Snombre'];
    $Tnombre = $_POST['Tnombre'];
    $Papellido = $_POST['Papellido'];
    $Sapellido = $_POST['Sapellido'];
    $telefono = $_POST['tel'];
    
    $grado = $_POST['grado'];
    $carrera = $_POST['carrera'];

    $sql = "UPDATE alumnos SET primernombre= '$Pnombre', segundonombre='$Snombre', tercernombre='$Tnombre', primerapellido='$Papellido', segundoapellido='$Sapellido', telefono='$telefono', grado='$grado', carrera='$carrera'  WHERE id = $clave ";

    if(mysqli_query($conn, $sql)){
        include("adminupdate.php");
        header("Location: listado.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
    
}
; ?>