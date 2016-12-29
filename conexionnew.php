<?php
	$conexion=mysqli_connect("sql200.eshost.com.ar","eshos_19307315")or die("No se a podido establecer la conexion");
	$sdb=mysqli_select_db($conexion,"eshos_19307315_herramientas")or die("La base de datos no existe");
?>