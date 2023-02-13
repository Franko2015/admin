<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("../conexion.php");

$id=$_POST['id'];

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$DNS=$_POST['DNS'];
$HOSTING=$_POST['HOSTING'];
$costo=$_POST['costo'];

$consulta="UPDATE tblSistema SET nombre='$nombre', descripcion='$descripcion', dns='$DNS', hosting='$HOSTING', costoTotal='$costo' WHERE id='$id';";

$resultado=mysqli_query($con,$consulta);
if($resultado){
echo "<script>
		alert('El sistema ha sido editado');
		window.location= '../../sistems.php'
	</script>";
mysqli_close($con);


}else{
	echo "<script>alert('No se pudo insertar'); windows.history.go(-1);</script>";
	header("Location: ../../clients.php");
}

?>