<?php
session_start();
$varsession = $_SESSION['usuario'];
$sessionID = $_SESSION['id'];
if(!$conn){
    die("La conexion fallo: ". mysqli_connect_error());
}else{
    $Origen = $_POST['Origen'];

    $Destino = $_POST['Destino'];

    $Motivo = $_POST['Motivo'];
    
    $Fsalida = $_POST['Fsalida'];
    $Fentrada = $_POST['Fentrada'];
   
    $sql = "SELECT * FROM alumnos ORDER BY id DESC LIMIT 1";
    $resultado = mysqli_query($conn, $sql);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $idalumno=$row['id'];
}
   

    $sql2 = "INSERT INTO historial (primernombre, segundonombre,tercernombre,primerapellido, segundoapellido, telefono, grado, carrera, fk_alumnos, fk_administracion, administracion_usuario, action)
    VALUE ('$Pnombre', '$Snombre', '$Tnombre', '$Papellido', '$Sapellido', '$telefono','$grado','$carrera', '$idalumno','$sessionID','$varsession', 'Creó un usuario'   )";

    if(mysqli_query($conn, $sql2)){
        header("Location: mostrar.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}}
?>