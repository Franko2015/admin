<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include("../conexion.php");

$rut=$_GET['rut'];

$consulta="UPDATE tblCliente SET estado='ACTIVO' WHERE rut='$rut';";

$resultado=mysqli_query($con,$consulta);

if($resultado){
echo "<script>
		alert('El cliente ha sido activado');
		window.location= '../../clients.php'
	</script>";
mysqli_close($con);


}else{
	echo "<script>alert('No se pudo insertar'); windows.history.go(-1);</script>";
	header("Location: ../../clients.php");
}

?>