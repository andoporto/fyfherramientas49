<?php
	session_start();
	/*
	if(!isset($_SESSION['usuario'])){
		echo "<script>alert('Debes ingresar para realizar esta acción')</script>";
		echo "<script>location.href='index.php'</script>";
	}else{
		if($_SESSION['usuario']['tipo'] != "administrador"){
			/*echo "<script>alert('Acceso restringido')</script>";
			echo "<script>location.href='index.php'</script>"; 
		}
	}*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!-- para sweet alert2 -->
        <script src="bower_components/es6-promise/es6-promise.auto.min.js"></script> <!-- for IE support -->
        <script type="text/javascript" src="js/sweetalert2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="js/sweetalert2/dist/sweetalert2.min.css">
<!--
<script type="text/javascript">
document.write("Esto ha sido escrito por JavaScript desde el head <br />")
</script>
</head>
<body>
<script type="text/javascript">
document.write("Esto ha sido escrito por JavaScript desde el body")
</script><br /> -->

</head>
	<body>	
		<?php require_once('cabecera.php'); ?>				
			
		<!-- Modal -->
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div Class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>Ingresa</h4>
					</div>
					
					<div class="modal-body" id="modal">
						<form class="form-horizontal" action="validar.php" method="POST">
							<div class="content-fluid">
								<div class="row-fluid">
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required autofocus>
										</div>
 
										<div class="form-group">
											<input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Contraseña" required autofocus>
										</div>
									</div>
								</div>
								
								<div class="row-fluid">
									<div class="col-sm-6">
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Ingresar</button>
										</div>
									</div>
							
									<div class="col-sm-6">
										<div class="form-group">
											<input type="checkbox">Recordar
										</div>
									</div>
								</div>
								
								<div class="row-fluid">
									<div class="col-sm-12">
										<div class="form-group">
											¿No tenes cuenta?<a href="registrousuario.php">Registrate</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					
					<div class="row-fluid">
						<div class="modal-footer">
							<button type="button" class="btn btn-primary"class="close" data-dismiss="modal" aria-hidden="true">cerrar</button>
						</div>
					</div>	
					
				</div>
			</div>
		</div>
		<!--Fin modal-->
		
		<!--Container cabecera-->
		<div class="container-fluid" id="container-cabecera">
			<div class="container" id="contenido-cabecera">
				<div id="titulo-cabecera">Administrador</div>
				<p>Panel de control.</p>
			</div>
		</div>
		<!--Fin Container cabecera-->
		
		<!--Comienzo container tabla-->
		<div class="container">
		
			<div class="row" id="boton-alta-usuario">
				<div class="col-md-4 col-md-offset-4">	
					<a href="altausuario.php" class="btn btn-primary btn-lg btn-block">Alta usuario</a>	
				</div>
			</div>
		
			<div class="row" id="tabla-usuarios">
				<?php
					include 'conexion.php';
					
					echo"<table class='table table-hover'>";
						echo"<tr>";
							echo"<td><strong>Nombre</strong></td>";
							echo"<td><strong>Apellido</strong></td>";
							echo"<td><strong>Correo</strong></td>";
							echo"<td><strong>Clave</strong></td>";					
						//	echo"<td><strong>Modificar</strong></td>";
						//	echo"<td><strong>Eliminar</strong></td>";
							echo"</tr>";
					
					$resultado=mysqli_query($conexion,"SELECT * FROM empleado");
					while($arreglo=mysqli_fetch_array($resultado)){
						echo"<tr>";
							echo"<td><strong>$arreglo[nombre]</strong></td>";
							echo"<td><strong>$arreglo[apellido]</strong></td>";
							echo"<td><strong>$arreglo[email]</strong></td>";
							echo"<td><strong>$arreglo[clave]</strong></td>";
						//	echo"<td><a href='administrador.php?id_usuario=$arreglo[idempleado]'>Modificar</a></td>";
						//	echo"<td><a href='eliminarusuario.php?id_usuario=$arreglo[idempleado]'>Eliminar</a></td>";
						echo"</tr>";
					}
					echo"</table>";
					
					if(isset($_GET['id_usuario'])){
							$id_usuario=$_GET['id_usuario'];
							$_SESSION['id_modifica']=$id_usuario;
							echo "<script>location.href='modificarusuario.php'</script>";
						}
				?>
			</div>
		</div>		
		<!--Fin container tabla-->
		
		<!--Comienzo container pie-->

		<!--Fin container ofertas-->
		
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
		<script src="js/jquery.min.js" ></script> 		
		<script src = "bootstrap/js/bootstrap.js" ></script> 
		<script src="lightbox/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>