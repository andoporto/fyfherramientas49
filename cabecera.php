<?php
    header('Content-type: text/html');
    header('Access-Control-Allow-Origin: *');
?>
<header id="header">
            <!--/.top-bar-->
            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="images/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="index.php">Inicio</a>
                            </li>
                            <li>
                                <a href="catalogo.php">Plantillas</a>
                            </li>
                            <li></li>
                            <li>
                                <a href="contacto.php">Contacto</a>
                            </li>
                       <!--     <li class="dropdown">
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="blog-item.html">Blog Single</a>
                                    </li>
                                    <li>
                                        <a href="pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="404.html">404</a>
                                    </li>
                                    <li>
                                        <a href="shortcodes.html">Shortcodes</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li>
                                <a href="nosotros.php">Quienes somos</a>
                            </li> 
                            
                            <!-- <ul class="nav navbar-nav navbar-right">
								<li class="pull-right"><a href="verdetalle.php"><i class="fa fa-shopping-cart" aria-hidden="true" id="icono-carrito"></i></a></li>
							</ul> -->
							
							<?php
							if (isset($_SESSION['usuario'])){
							?>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4><?php echo "Bienvenido ".$_SESSION['usuario']['nombre'];?><span class="caret"></span></h4></a>
									<ul class="dropdown-menu">
									<?php
									if ($_SESSION['usuario']=="administrador"){
									?>
										<li><?php echo "<a href='administrador.php'><h4>Panel de control</h4></a>";?></a></li>
									<?php
									}else{
									?>
										<li><?php echo "<a href='micuenta.php'><h4>Mi cuenta</h4></a>";?></a></li>
									
									<?php
									}
									?>
										<li role="separator" class="divider"></li>
										<li><?php echo "<a href='desconectar.php'><h4>Cerrar sesi&oacute;n</h4></a>";?></a></li>
									</ul>
								</li>
							</ul>
							<?php
							}else{
							?>
							<ul class="nav navbar-nav navbar-right">
								<li class="pull-right"><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
								<h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Ingresar</h4></a></li>
							</ul>
							<?php
							}
							?> 
							
						</div>                    
                                </ul>
                                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4>Ingresa</h4>
                                            </div>
                                            <div class="modal-body" id="modal">
                                                <form class="form-horizontal" action="procesologin.php" method="POST">
                                                    <div class="content-fluid">
                                                        <div class="row-fluid">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="inputEmail3" name="correo" placeholder="Email" required autofocus>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control" id="exampleInputPassword" name="clave" placeholder="Contraseña" required autofocus>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                                                </div>
                                                            </div>                                                             
                                                        </div>
                                                        <div class="row-fluid">
                                                            <div class="col-sm-12">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" lass="close" data-dismiss="modal" aria-hidden="true">cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                 
                                </div>
                            </li>                             
                        </ul>
                    </div>
                </div>
                <!--/.container-->
            </nav>
            <!--/nav-->
</header>