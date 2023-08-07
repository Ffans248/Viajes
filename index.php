<?php
session_start();
error_reporting(0);
$varsession= $_SESSION['usuario'];
if ($varsession==null||$varsession='') {

    session_destroy();
   // die();
}else{
  header("location:registrar.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div id="bg"></div>

  <form action="" method="POST">

  
    <h1>PANEL DE ADMINISTRADOR</h1>
    <div class="form-field">
      <input type="text" placeholder="Email / Username" name="usuario"  />
    </div>

    <div class="form-field">
      <input type="password" placeholder="Password" name="pass"  />
    </div>


    <div class="form-field">
      <input class="btn" type="submit" name="log" value="Iniciar sesion">
    </div>
    <?php 
  include("conexiondb.php");
  include("validar.php");
   ?>
  </form>
  <!-- partial -->

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</html>
