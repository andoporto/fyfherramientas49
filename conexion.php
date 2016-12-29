<?php
	$conexion=mysqli_connect("127.0.0.1:3306","root")or die("No se a podido establecer la conexion");
	$sdb=mysqli_select_db($conexion,"herramientas")or die("La base de datos no existe");
?>