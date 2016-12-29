<?php
	session_start();
	
	$nombre=$_POST['nombre'];
	
	if(empty($nombre)){
		echo "<script>alert('Ingrese un nombre del artículo')</script>";
		echo "<script>location.href='catalogo.php'</script>";
	}
		
	if (!ereg("^[a-zA-Z0-9]",$nombre)){ 
		echo "<script>alert('El nombre del artículo debe tener letras o numeros')</script>";
		echo "<script>location.href='catalogo.php'</script>";
	}
		
	if(strlen($nombre) < 4){
		echo "<script>alert('El nombre de plantilla debe tener 4 caracteres como minimo')</script>";
		echo "<script>location.href='catalogo.php'</script>";
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Inicio | F y F herramientas</title>
        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">


        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>

         <!-- para sweet alert2 -->
        <script src="bower_components/es6-promise/es6-promise.auto.min.js"></script> <!-- for IE support -->
        <script type="text/javascript" src="js/sweetalert2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="js/sweetalert2/dist/sweetalert2.min.css">
		
	       <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>	
<body class="homepage">	
	<?php require_once('cabecera.php'); ?>	
	 <section id="feature">	
		<div class="container">
				
		<!--Container cabecera-->
		<div class="container-fluid" id="container-cabecera">
			<div class="container" id="contenido-cabecera">
				<div id="titulo-cabecera">Art&iacute;culos</div>
				<!--<p>Eleg&iacute; el art&iacute;culo que se adapte a tu necesidad</p>-->
			</div>
		</div>
		<!--Fin Container cabecera-->
		
		<!--Comienzo container buscar nombre-->
		<div class="container">
			<div class="row" id="buscar-nombre">	
				<?php
				include "conexion.php";
				
				$nombre=$_POST['nombre'];
				//$id_usuario=$_SESSION['id_articulo'];
			
				$resultado=mysqli_query($conexion,"SELECT * FROM articulo WHERE codarticulo='$nombre'");
					$array=mysqli_fetch_array($resultado);
					if($array['codarticulo']==$nombre){
					//if($array['id_articulo']!=$id_usuario) { 
					if(1) { 
							?>
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail">
									<a class="example-image-link" href='<?php echo($array['imagen']);?>' data-lightbox="example-set" data-title="Optional caption."><img class="example-image" src='<?php echo($array['imagen']);?>' alt=""/></a>
									<div class="caption">
										<p><?php echo $array['codarticulo'];?></p>
										<p><?php echo $array['descripcion'];?></p>
										<h3><?php echo "$ ".$array['precio'];?></h3>
										<?php echo "<p><a href='catalogo.php' class='btn btn-primary' role='button'>Volver</a> </p>"?> 
									
									</div>
									</div>
								</div>	
							<?php
						}else{
							echo "<div id='error'>No se encontraron resultados</div>";						
						}
					}else{
						echo "<div id='error'>No se encontraron resultados</div>";
						}
				?>
			</div>	
		</div>
		<!--Fin container buscar nombre-->
		
		<!--Comienzo container pie-->

		<!--Fin container ofertas-->
		
	
	</section>
	<?php require_once('pie.php'); ?>  
	</body>
</html>