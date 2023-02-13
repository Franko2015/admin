<?php

include("../conexion.php");

$id=$_GET['id'];

$consultaEliminar="DELETE FROM tblSistema WHERE id = '$id'";

$resultado= mysqli_query($con, $consultaEliminar);

if($resultado){
	
echo "<script>
		alert('El sistema ha sido eliminado');
		window.location= '../../sistems.php'
	</script>";

}else{
	echo "<script>alert('No se pudo eliminar'); windows.history.go(-1);</script>";
}
?>