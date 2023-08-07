<?php
session_start();
$varsession = $_SESSION['usuario'];
$sessionID = $_SESSION['id'];
include ("conexiondb.php");
if(!$conn){
    die("La conexion fallo: ". mysqli_connect_error());
}else{

    $clave = $_POST['clave'];

    $Origen = $_POST['Origen'];

    $Destino = $_POST['Destino'];

    $Motivo = $_POST['Motivo'];
    
    $Fsalida = $_POST['FSalida'];
    $Fentrada = $_POST['FEntrada'];
   
    $sql = "SELECT * FROM alumnos ORDER BY id DESC LIMIT 1";
    $resultado = mysqli_query($conn, $sql);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $idalumno=$row['id'];
}
   

    $sql2 = "INSERT INTO viajes (origen, destino, motivo, fechaSalida, fechaEntrada, fk_viajero)
    VALUE ('$Origen', '$Destino', '$Motivo', '$Fsalida', '$Fentrada', '$fk_viajero')";

    if(mysqli_query($conn, $sql2)){
        header("Location: mostrar.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}}
?>