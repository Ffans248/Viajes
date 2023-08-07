<?php
session_start();
include("conexiondb.php");
$usuario =$_POST['usuario'];
$pass =$_POST['pass'];


if (!empty($_POST["log"])) {
    if (empty($_POST["usuario"]) and empty($_POST["pass"])) {
        echo '<div class="text-danger">LOS CAMPOS ESTAN VACIOS</div>';

    } else {
        
        $sql=$conn->query("select * from administracion where usuario='$usuario' and pass='$pass'");
        if ($datos=$sql->fetch_object()) {  
            $_SESSION['usuario']=$usuario;
            $_SESSION['id']=$datos->id;?>
            <meta http-equiv="Refresh" content="0; url='registrar.php'" />
        <!--("Location:registrar.php") exit(); -->
          <?php
        } else {
            echo '<div class="text-danger">El usuario no existe</div>'; 
        }
        
    }
    
}
?>