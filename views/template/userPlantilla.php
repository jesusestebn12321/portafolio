<?php 

/**
 * 
 */


$obj=new Plantilla();
class Plantilla{
	
	function __construct(){
		# code...
		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
	        <meta name="description" content="">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	       
			<title> Portafolio </title>

			<link rel="shortcut icon" href="img/portafolio.ico" />

	       		<!-- Styles -->
		    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="./css/main.css">
			<link rel="stylesheet" href="css/bootstrap.min.css">
				<!-- Scripts -->
			<script href="plugins/bootstrap/js/vendor/modernizr-2.8.3.min.js"></script>
			<script href="plugins/bootstrap/js/vendor/bootstrap.min.js"></script>
			<script href="plugins/bootstrap/js/vendor/jquery-1.11.2.min.js"></script>

		</head>
		<body>
		<header>
		    <?php include 'sidebarredes.php'; ?>

			<nav class="navbar app-navbar">
				<div class="container">
					<div class="navbar-header">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<button class="navbar-toggle" date-toggle="collapse" date-target="#menu">
									<spam class="icon-bar app-icon"></spam>
									<spam class="icon-bar app-icon"></spam>
									<spam class="icon-bar app-icon"></spam>	
								</button>
								<a href="/miprimerframework/public" class="app-centrar" >Portafolio</a>
							</div>
							<div class="col-xs-12 col-sm-6">
								<img class="app-img-titulo" src="img/manual.png">
							</div>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav navbar-right app-nav">
							<li class="app-button"><a href="#">Modal</a><li>
							<li class="app-button"><a href="#">Modal</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<section>

				<div class="app-centrar-imgP">

					<img class="app-imagen-personal" src="img/imgPersonal.jpg" alt="imagen personal">
				</div>
				<div class="app-centrar-nombre">
					<p class="app-titulo-nombre">Jesus Esteban Villalta Gonzalez</p>
                </div>
                <div>
					<div> <?php include 'slider.php'; ?>  </div>

				</div>




                




			</section>

			</header>
		
		<?php 
	}
	function __destruct(){
	?>

	</body>
	<footer class="app-footer">
        <div class="app-empresa">
            <h4>Jesus Esteban Villalta Gonzalez</h4>
        </div>
        <div class="container">
          	<div class="row">
           		<div class="col-xs-4 col-sm-4">
           			<li class="list"><a class="app-footer-a" href="#">Telegram</a></li>
            	</div>
            	<div class="col-xs-4 col-sm-4">
            		<li class="list"><a class="app-footer-a" href="#">Whatsapp</a></li>
            	</div>
            	<div class="col-xs-4 col-sm-4">
            		<li class="list"><a class="app-footer-a" href="#">Gmail</a></li>
            	</div>
            </div>
        </div>
    </footer>     
		<!-- Scripts   -->
	<script>window.jQuery || document.write('<script href="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script href="js/vendor/bootstrap.min.js"></script>
	<script href="js/vendor/jquery-1.11.2.min.js"></script>
			
</html>

		<?php 
	}




}
?>