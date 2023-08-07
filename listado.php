<?php 
session_start();
 error_reporting(0);
$varsession = $_SESSION['usuario'];
$sessionID = $_SESSION['id'];
if ($varsession == null || $varsession == '') {
    header("Location:index.php");
    die();
}; 
include("conexiondb.php");
if(!$conn){
    die("La conexión fallo: " . mysqli_connect_error());
}

else{
  
  if (isset($_POST['filtrar'])) {
    $where="";
  $Anombre=$_POST['nombrea'];
  $Acarrera=$_POST['ncarrera'];
  $Agrado=$_POST['ngrado'];

    if(empty($_POST['ncarrera']) or empty($_POST['ngrado'])){
      
    }else 
    $where="where carrera='$Acarrera' and grado= '$Agrado'";
    }
  }

  
  $sql = "SELECT * FROM alumnos $where";
    $resultado = mysqli_query($conn, $sql);
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.css">

  </head>
  <body>
  <div style="position:fixed; left:1.5%; top:2%; font-size:100%"> <a class="nav-link dropdown-toggle" href="#"
            role="button" data-bs-toggle="dropdown" aria-expanded="false"><i href="#"
                class="glyphicon glyphicon-user"></i>
            <?php echo $_SESSION['usuario']; ?>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registrar.php">Registrar Estudiantes</a></li>
            <li><a class="dropdown-item" href="historial.php">Historial de Cambios</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="cerrar_session.php">Cerrar sesión</a></li>
        </ul>
    </div>
    <form action="" method="POST">
  <br> <br>
  <div class="row">
   
    <div class="col">
      <label for="carrera" class="form-label">Carrera:</label>
      <select name="ncarrera" class="form-select form-select-lg">
        <option value="">Todos</option>
        <option value="Primaria">Primaria</option>
        <option value="Basico">Básico</option>
        <option value="Computacion">Computación</option>
        <option value="Dibujo">Dibujo</option>
        <option value="Mecanica">Mecanica</option>
        <option value="Electronica">Electrónica</option>
      </select>
    </div>
    <div class="col">
    <label for="grado" class="form-label">Grado:</label>
      <select name="ngrado" class="form-select form-select-lg">
        <option value="">Todos</option>
        <option value="1">Primer año</option>
        <option value="2">Segundo año</option>
        <option value="3">Tercer año</option>
            
      </select>
      
    </div>
    <div style="margin-top: 2%;" class="col"><button type="submit" name="filtrar" class="btn btn-success">Buscar</button></div>
  </div>
</form>
  <table style="margin-top:2.5%;" class=" table table-sm table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Primer Nombre</th>
      <th scope="col">Segundo Nombre</th>
      <th scope="col">Tercer Nombre</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Grado</th>
      <th scope="col">Carrera</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

  <?php



    if($resultado){
        while($row = $resultado->fetch_array()){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['primernombre'] . "</td>";
            echo "<td>" . $row['segundonombre'] . "</td>";
            echo "<td>" . $row['tercernombre'] . "</td>";
            echo "<td>" . $row['primerapellido'] . "</td>";
            echo "<td>" . $row['segundoapellido'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['grado'] . "</td>";
            echo "<td>" . $row['carrera'] . "</td>";
            ?>
            <td> <a href="actualizar.php?id=<?php echo $row['id']; ?>&primernombre=<?php echo urlencode($row['primernombre']); ?>&segundonombre=<?php echo urlencode($row['segundonombre']); ?>&tercernombre=<?php echo urlencode($row['tercernombre']); ?>&primerapellido=<?php echo urlencode($row['primerapellido']); ?>&segundoapellido=<?php echo urlencode($row['segundoapellido']); ?>&telefono=<?php echo urlencode($row['telefono']); ?>&grado=<?php echo urlencode($row['grado']); ?>&carrera=<?php echo urlencode($row['carrera']); ?>"><i class="bi bi-pencil"></i></button></a>
            <a href="admindelete.php?id=<?php echo $row['id']; ?>&primernombre=<?php echo urlencode($row['primernombre']); ?>&segundonombre=<?php echo urlencode($row['segundonombre']); ?>&tercernombre=<?php echo urlencode($row['tercernombre']); ?>&primerapellido=<?php echo urlencode($row['primerapellido']); ?>&segundoapellido=<?php echo urlencode($row['segundoapellido']); ?>&telefono=<?php echo urlencode($row['telefono']); ?>&grado=<?php echo urlencode($row['grado']); ?>&carrera=<?php echo urlencode($row['carrera']); ?>"><i class="bi bi-trash"></i></button></a></td>
            <?php
            echo "</tr>";
            //include("admindelete.php");
        }
    }


?>
  </tbody>
</table>  



  <!-- NO BORRAR ----------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  </body>
</html>