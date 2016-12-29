<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
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
        <script src="js/jquery.min.js" ></script>
		<script src = "bootstrap/js/bootstrap.js" ></script> 
		<script src="lightbox/js/lightbox-plus-jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" href="lightbox/css/lightbox.min.css">
		
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
			<div class="container" id="contenido-cabecera">
				<div id="titulo-cabecera">Descripci&oacute;n</div>
				<h1>Informaci&oacute;n del producto</h1>
			</div>

		<!--Fin Container cabecera-->
		
		<!--Comienzo container descripcion-->
		
			<div class="row" id="descripcion">
				<?php
				include "conexion.php";
				$idarticulo=$_GET['idarticulo'];
				
				$resultado=mysqli_query($conexion,"SELECT * FROM articulo WHERE idarticulo='$idarticulo'");
				$array=mysqli_fetch_array($resultado);
				?>
				
				<div class="col-md-6">
					<div class="thumbnail">
						<a class="example-image-link" href='<?php echo($array['imagen']);?>' data-lightbox="example-set" data-title="Optional caption."><img class="example-image" src='<?php echo($array['imagen']);?>' alt=""/></a>
					</div>
				</div>	
						
				<div class="col-md-6">
					<div class="jumbotron" id="jumbotron">
						<h2><?php echo $array['codarticulo'];?></h2>
						<h2><?php echo $array['descripcion'];?></h2>
						<h2><?php echo $array['tipo'];?></h2>
						<h1><?php echo "$ ".$array['precio'];?></h1>
						</br>
						<?php echo "<a class='btn btn-primary btn-lg' href='catalogo.php' >Volver</a>";?> 
				</div>	
				</div>	
			</div>	
			</div>	
		</section>	
		
		<!--Comienzo container pie-->
		<?php require_once('pie.php'); ?> 
		<!--Fin container ofertas-->		


	</body>
</html>