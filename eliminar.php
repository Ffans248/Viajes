<?php 
include("sesion.php");
$id =$_GET['id'];

//CONEXION
include("conexiondb.php");
 
if(!$conn){
    die("La conexión fallo: " . mysqli_connect_error());
}else{
    
    $sql = "DELETE FROM alumnos WHERE id= $id";

    if(mysqli_query($conn, $sql)){
        
        header("Location: listado.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
    
}?>