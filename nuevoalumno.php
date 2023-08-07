<?php
include("sesion.php");
include("conexiondb.php");
if(!$conn){
    die("La conexion fallo: ". mysqli_connect_error());
}else{
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $telefono = $_POST['tel'];
    $Nacionalidad = $_POST['Nacionalidad'];
    $Correo = $_POST['Correo'];
   

    $sql = "INSERT INTO viajeros (nombre, apellido, telefono, nacionalidad, correo)
    VALUE ('$Nombre', '$Apellido', '$telefono', '$Nacionalidad', '$Correo')";
    
    if(mysqli_query($conn, $sql)){
        include("admincreate.php");
        header("Location: listado.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>