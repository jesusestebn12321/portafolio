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
	       
			<title> OneSystem  | Error </title>

	       		<!-- Styles -->
		    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap-theme.min.css">
			<link rel="stylesheet" href="./plugins/bootstrap/css/style.css">
			<link rel="stylesheet" href="./plugins/bootstrap/css/main.css">
			<link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap.min.css">
				<!-- Scripts -->
			<script src="./plugins/bootstrap/js/vendor/modernizr-2.8.3.min.js"></script>
			<script src="./plugins/bootstrap/js/vendor/bootstrap.min.js"></script>
			<script src="./plugins/bootstrap/js/vendor/jquery-1.11.2.min.js"></script>

		</head>
		<body>
		<header>

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
								<a href="/miprimerframework/public" class="app-centrar" >Name</a>
							</div>

							<div class="col-xs-12 col-sm-6">
								<img src="#" alt="img">
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
			
			
			</header>
		
		<?php 
	}
	function __destruct(){
	?>

	</body>
	<footer class="app-footer">
        <div class="app-empresa">
            <h4>Nombre de la empresa</h4>
            <p class="app-descripcion2">Redes sociales</p>
        </div>
        <a href="#"><img src="" class=" app-icon1"></a>
        <a href="#"><img src="" class=" app-icon1"></a>
        <a href="#"><img src="" class=" app-icon1"></a>
        <div class="container">
          	<div class="row">
           		<div class="col-xs-4 col-sm-4">
           			<li class="list"><a class="app-footer-a" href="#">Holaa</a></li>
            	</div>
            	<div class="col-xs-4 col-sm-4">
            		<li class="list"><a class="app-footer-a" href="#">Holaa</a></li>
            	</div>
            	<div class="col-xs-4 col-sm-4">
            		<li class="list"><a class="app-footer-a" href="#">Holaa</a></li>
            	</div>
            </div>
        </div>
    </footer>     
		<!-- Scripts   -->
	<script>window.jQuery || document.write('<script src="./plugins/bootstrap/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="./plugins/bootstrap/js/vendor/bootstrap.min.js"></script>
	<script src="./plugins/bootstrap/js/vendor/jquery-1.11.2.min.js"></script>
			
</html>

	



		<?php 
	}




}
?>