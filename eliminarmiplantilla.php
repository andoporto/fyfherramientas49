<?php
	
	session_start();
	
	include "conexion.php";
	
	
	//$idarticul=$array[idarticulo];
	
	if($resultado=mysqli_query($conexion,"DELETE FROM articulo WHERE idarticulo=$idarticulo")){
		echo"Producto eliminado";
		header("Location:micuenta.php");
	}else{
		echo "No se pudo eliminar la fila";
		header("Location:micuenta.php");
	}
	
	/*Si no funca en el navegador, fijate en phpmyadmin.*/
	/*Si no se elimina es porque esta siendo utilizado por otra tabla*/
?>