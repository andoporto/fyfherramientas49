<?php
	session_start();
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

<!--<script type="text/javascript">
document.write("Esto ha sido escrito por JavaScript desde el head <br />")
</script>
</head>
<body>
<script type="text/javascript">
document.write("Esto ha sido escrito por JavaScript desde el body")
</script><br />
Esto ha sido escrito por JavaScript en html -->


        <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->         
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<!-- <script type="text/javascript"> -->
	<body class="homepage">

		<?php require_once('cabecera.php'); ?>
		
		<!--Container cabecera-->
		<section id="feature">	
			<div class="container">
				<div id="titulo-cabecera">Articulos</div>
				<!--<p>Eleg&iacute; el articulo</p> -->

		
		<!--Fin Container cabecera-->
		
		<!--Comienzo container buscadores y ofertas-->
	
			
			<div class="row" id="buscadores">
				<div class="col-md-4-fluid">
					<form class="navbar-form navbar-left" role="search" action="buscarnombre.php" method="post" enctype="multipart/form-data">
						<div class="input-group">
							<input type="text" class="form-control" name="nombre" placeholder="Buscar por nombre">
							 <span class="input-group-btn">
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
							 </span>
						</div>
					</form>
				</div>
			
				<div class="col-md-4-fluid">
					<form class="navbar-form navbar-left" role="search" action="buscartipo.php" method="post" enctype="multipart/form-data" class="pull-right">
						
						<div class="input-group">
							<select class="form-control" name="tipo">
								<option value="" selected="selected">Buscar por tipo</option>
								<option value="tecnologia">Llave T</option>
								<option value="deportes">Herramientas especiales</option>
								<option value="arte">Kit de puesta a punto</option>
								<option value="viajes">Otros</option>
							</select>
							<span class="input-group-btn">
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
							 </span> 
						</div>
	
					</form>
				</div>
				
			</div>
			<!--Fin row buscadores-->
			
			<!--Comienzo row ofertas-->
		
		<div class="row" id="catalogo">	
				<?php
				include "conexion.php";
	
							if(isset($_SESSION['empleado'])){
								$idempleado=$_SESSION['empleado']['id_usuario'];
								$resultado=mysqli_query($conexion,"SELECT * FROM empleado where id_usuario!='$id_usuario'");
								while($array=mysqli_fetch_array($resultado)){
									?>
									<div class="col-md-3">
										<div class="thumbnail">
											<a class="example-image-link" href='<?php echo($array['imagen']);?>' data-lightbox="example-set" data-title="Optional caption."><img class="example-image" src='<?php echo ($array['imagen']);?>' alt=""/></a>
											<div class="caption">
												<p><?php echo $array['descripcion'];?></p>
												<h3><?php echo "$".$array['precio'];?></h3>
												<?php echo "<p><a href='descripcion.php?id_plantilla=$array[id_plantilla]' class='btn btn-primary' role='button'>Comprar ahora</a></p>";?> 
											</div>
										</div>
									</div>
									<?php
								}
							}else{
							$resultado=mysqli_query($conexion,"SELECT * FROM articulo");
							while($array=mysqli_fetch_array($resultado)){
								?>
								<div class="col-md-3">
									<div class="thumbnail">
										<a class="example-image-link" href='<?php echo($array['imagen']);?>' data-lightbox="example-set" data-title="Optional caption."><img class="example-image" src='<?php echo ($array['imagen']);?>' alt=""/></a>
										<div class="caption">
											<p><?php echo $array['codarticulo'];?></p> 
											<h3><?php echo "$".$array['precio'];?></h3>
										   <?php echo "<p><a href='descripcion.php?idarticulo=$array[idarticulo]' class='btn btn-primary' role='button'>Ver detalle</a></p>";?> 
										</div> 
									</div>
								</div>
								<?php
								}
							}
							?>				
				
			<!--Fin row ofertas-->
		</div>
		</div>
		
		<!--Fin container buscadores y ofertas-->
		</section>	
		<?php require_once('pie.php'); ?>  	
	</body>
	
</html>