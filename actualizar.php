<?php include("sesion.php");; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php
    $id =$_GET['id'];
    $primernombre = $_GET['primernombre'];
    $segundonombre = $_GET['segundonombre'];
    $tercernombre = $_GET['tercernombre'];
    $primerapellido = $_GET['primerapellido'];
    $segundoapellido = $_GET['segundoapellido'];
    $telefono = $_GET['telefono'];
    $grado = $_GET['grado'];
    $carrera = $_GET['carrera'];
    ?>
     <div class="mb-3 text-center"><h1>Editar estudiantes</h1></div> 
    <form action="update.php" method="POST">
        <div style="margin: 15px;">
            <div class="mb-3">
                <label for="Clave" class="form-label">Clave</label>
                <input type="text" class="form-control" name="clave" placeholder="ID" value="<?php echo $id;?>"
                    readonly>
            </div>
            <div class="mb-3">
                <label for="PNombre" class="form-label">Primer nombre:</label>
                <input type="text" class="form-control" name="Pnombre" placeholder="Primer nombre" value="<?php echo $primernombre;?>" required>
            </div>
            <div class="mb-3">
                <label for="SNombre" class="form-label">Segundo Nombre</label>
                <input type="text" class="form-control" name="Snombre" placeholder="Segundo nombre" value="<?php echo $segundonombre;?>">
            </div>
            <div class="mb-3">
                <label for="TNombre" class="form-label">Tercer nombre:</label>
                <input type="text" class="form-control" name="Tnombre" placeholder="Tercer nombre" value="<?php echo $tercernombre;?>">
            </div>

            <div class="mb-3">
                <label for="PApellido" class="form-label">Primer Apellido:</label>
                <input type="text" class="form-control" name="Papellido" placeholder="Primer Apellido" required value="<?php echo $primerapellido;?>">
            </div>
            <div class="mb-3">
                <label for="SApellido" class="form-label">Segundo Apellido:</label>
                <input type="text" class="form-control" name="Sapellido" placeholder="Primer Apellido" required value="<?php echo $segundoapellido;?>">
            </div>
            <div class="mb-3">
                <label for="Correo" class="form-label">Telefono:</label>
                <input type="number" class="form-control" name="tel" placeholder="Telefono" required value="<?php echo $telefono;?>">
            </div>
            <div class="mb-3">
                <label for="carrera" class="form-label">Carrera:</label>
                <select class="form-select form-select-lg mb-3" name="carrera" id="carrera" value="<?php echo $carrera;?>">
                    <option value="Primaria">Primaria</option>
                    <option value="Basico">Básico</option>
                    <option value="Computacion">Computación</option>
                    <option value="Dibujo">Dibujo</option>
                    <option value="Mecanica">Mecanica</option>
                    <option value="Electronica">Electrónica</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="carrera" class="form-label">Grado:</label>
                <select class="form-select form-select-lg mb-3" name="grado" id="carrera" value="<?php echo $grado;?>">
                    <option value="1">Primer año</option>
                    <option value="2">Segundo año</option>
                    <option value="3">Tercer año</option>

                </select>
            </div>

            <div class="d-grid mb-3">
                <button class="btn btn-success" type="submit">Registrar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>