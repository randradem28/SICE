<?php
$boleta=$_POST['boleta'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['boleta']=$boleta;

include('conexion.php');

$consulta ="SELECT * FROM registro_alumnos where boleta='$boleta' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:home.php");
}
else{
	?>
	<?php
	include("login.php");
	?>
	<h4 class="bad">Usuario o contraseña incorrectos. Intenta de nuevo.</h4>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>