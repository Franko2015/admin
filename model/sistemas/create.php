<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("../conexion.php");

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$DNS=$_POST['DNS'];
$HOSTING=$_POST['HOSTING'];
$costo=$_POST['costo'];

$consulta="INSERT INTO `tblSistema` (nombre, descripcion, dns, hosting, costoTotal) VALUES ('$nombre', '$descripcion', '$DNS','$HOSTING', '$costo');";

$resultado=mysqli_query($con,$consulta);
if($resultado){
echo "<script>
		alert('La ficha del sistema ha sido creada');
		window.location= '../../sistems.php'
	</script>";
mysqli_close($con);


}else{
	echo "<script>alert('No se pudo insertar'); windows.history.go(-1);</script>";
	header("Location: ../../sistems.php");
}

?>