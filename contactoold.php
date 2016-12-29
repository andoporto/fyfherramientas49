<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Contactenos | Herramientas F y F Herramientas</title>

						
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<link href="css/animate.min.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">

						<!--[if lt IE 9]> --> 
		<script src="js/html5shiv.js"/>
		<script src="js/respond.min.js"/>

		<link rel="shortcut icon" href="images/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

		<?php
		$name = @trim(stripslashes($_POST['name'])); 
		$email = @trim(stripslashes($_POST['email'])); 
		$subject = @trim(stripslashes($_POST['subject'])); 
		$message = @trim(stripslashes($_POST['message'])); 

		$email_from = $email;
		$email_to = 'andoporto@gmail.com';//replace with your email

		$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

		$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
		
		?>
	</head>
<!--/head-->

	<body class="homepage">	
	<?php require_once('cabecera.php'); ?>	
		<section id="feature">
			<div class="container">
				<div class="center">        
					<h1>Deje su mensaje</h1>
					<h5>Escribanos, le reponderemos a la brevedad</h5>
				</div> 
				<div class="row contact-wrap"> 
					<div class="status alert alert-success" style="display: none"/>
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
						<div class="col-sm-5 col-sm-offset-1">
							<div class="form-group">
								<label>Nombre *</label>
								<input type="text" name="name" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Email *</label>
									<input type="email" name="email" class="form-control" required="required">
									</div> 
									<div class="form-group">
										<label>Asunto *</label>
										<input type="text" name="subject" class="form-control" required="required">
										</div>
										<div class="form-group">
											<label>Mensaje *</label>
											<textarea name="message" id="message" required="required" class="form-control" rows="8"/>
										</div>                        
										<div class="form-group">
											<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar Mensaje</button>
										</div>						
									</div>
								</form> 
							</div>						
			</div>				
	</section>
	<?php require_once('pie.php'); ?> 
	</body>
</html>