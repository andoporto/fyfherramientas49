<?php
	session_start();
	
	$tipo=$_POST['tipo'];
	
	if(empty($tipo)){
		echo "<script>alert('Seleccione un tipo de plantilla')</script>";
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
</head>
	<body class="homepage">
		<?php require_once('cabecera.php'); ?>		

		<section id="feature">
			<div class="container">
			<!--Container cabecera-->
			
				<div class="container" id="contenido-cabecera">
					<div id="titulo-cabecera">Articulos</div>
					<p>Filtrado por tipo</p>
				</div>
			
			<!--Fin Container cabecera-->
			
			<!--Comienzo container buscar por tipo-->			
				<div class="row" id="buscar-tipo">	
					<?php
					include "conexion.php";
			
					/*$id_articulo=$_SESSION['articulo']['idarticulo'];			 */	
					$resultado=mysqli_query($conexion,"SELECT * FROM articulo where tipo='$tipo'");
					while($array=mysqli_fetch_array($resultado)){
						if(['idarticulo']!=$id_articulo){
					?>
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<a class="example-image-link" href='<?php echo($array['imagen']);?>' data-lightbox="example-set" data-title="Optional caption."><img class="example-image" src='<?php echo($array['imagen']);?>' alt=""/></a>
								<div class="caption">
									<p><?php echo $array['descripcion'];?></p>
									<h3><?php echo "$".$array['precio'];?></h3>
									<?php echo "<p><a href='descripcion.php?id_plantilla=$array[id_plantilla]' class='btn btn-primary' role='button'>Comprar ahora</a> </p>";?> 
								</div>
								</div>
							</div>
					
					<?php
						}
							
					}
					?>
				</div>
			</div>
		<!--Fin container buscar por tipo-->
		</section>	
	<?php require_once('pie.php'); ?> 
</html>