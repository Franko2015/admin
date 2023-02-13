<?php

include("../conexion.php");

$rut=$_GET['rut'];

$consultaEliminar="DELETE FROM tblCliente WHERE rut = '$rut'";

$resultado= mysqli_query($con, $consultaEliminar);

if($resultado){
	
echo "<script>
		alert('El cliente ha sido eliminado');
		window.location= '../../clients.php'
	</script>";

}else{
	echo "<script>alert('No se pudo eliminar'); windows.history.go(-1);</script>";
}
?>