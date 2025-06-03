<?php
session_start();

$inc=include("conexion.php");

$boleta = $_SESSION['boleta'];

   if($inc){
      $consulta ="SELECT * FROM registro_alumnos where boleta='$boleta'";
      $resultado = mysqli_query($conexion,$consulta);
      if($resultado){
         while ($row = $resultado->fetch_array()){
            $boleta = $row['Boleta'];
            $nombre = $row['Nombre'];
            $apellidop = $row['Apellido_Paterno'];
            $apellidom = $row['Apellido_Materno'];
            $plantel = $row['Plantel'];
            $carrera = $row['Carrera'];
            $foto = $row['Fotografía'];
            $qr = $row['QR'];
         }
      }
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Te damos la bienvenida | SICE UPIICSA</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<header>
   <h1>¿Cómo va tu día <?php echo $nombre?>? :) </h1>
   <h3><a href="logout.php">Cerrar Sesión</a></h3>
</header>
<body>
   <img src="<?php echo $foto ?>">
   <h2><strong>BOLETA:</strong></h2>
   <p><?php echo $boleta?></p><br>
   <h2><strong>NOMBRE: </strong></h2>
   <p><?php echo $nombre?></p><br>
   <h2><strong>APELLIDOS: </strong></h2>
   <p><?php echo $apellidop?> <?php echo $apellidom?></p><br>
   <h2><strong>PLANTEL: </strong></h2>
   <p><?php echo $plantel?></p><br>
   <h2><strong>PROGRAMA ACADÉMICO: </strong></h2>
   <p><?php echo $carrera?></p><br>
   <div class="button"><a href="credencial-pdf.php" target="_blank"><strong>Generar Credencial</strong></a></div>
</body>
</html>