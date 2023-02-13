<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("../conexion.php");

$rut=$_POST['rut'];

$nombre=$_POST['nombre'];
$dir=$_POST['dir'];
$fono=$_POST['fono'];

$consulta="UPDATE tblCliente SET nombre='$nombre', direccion='$dir', telefono='$fono' WHERE rut='$rut';";

$resultado=mysqli_query($con,$consulta);

if($resultado){
echo "<script>
		alert('El cliente ha sido editado');
		window.location= '../../clients.php'
	</script>";
mysqli_close($con);


}else{
	echo "<script>alert('No se pudo insertar'); windows.history.go(-1);</script>";
	header("Location: ../../clients.php");
}

?>