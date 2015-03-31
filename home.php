<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    	<!-- Bootstrap CSS -->
    	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    	<!-- CSS Propio -->
    	<link href="css/home.css" rel="stylesheet"/>
	</head>
	<body>
		<!-- Cabecera -->
		<div class="row" id="cabecera">
			<div class="col-xs-6 col-sm-4" id="logo"><img src="img/logo/logo.jpg" class="img-responsive"/></div>
			<div class="col-xs-6 col-sm-8" id="logo2"></div>	
		</div>
		<!-- Fin de Cabecera -->
		
		<!-- Menu -->
		<div class="row" id="menu">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a>
					</div>
				
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="servicios.php"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>Servicios</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>Academia</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Tienda <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Equipos Master</a></li>
									<li><a href="#">Portatiles</a></li>
									<li><a href="#">Miscelanea</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
		<!-- Fin de Menu -->
		
		<!-- Main -->
		<div class="row" id="main">
			<div id="imagenes">
				<div id="servicios">
					<a href="servicios.php"><img src="img/home/servicios33.jpg" class="img-responsive img-rounded"></a>
					<h2>SERVICIOS</h2>
				</div>
				<div id="academia">
					<img src="img/home/academia3.jpg" class="img-responsive img-rounded">
					<h2>ACADEMIA</h2>
				</div>
				<div id="tienda">
					<img src="img/home/tienda3.jpg" class="img-responsive img-rounded">
					<h2>TIENDA</h2>
				</div>		
			</div>
		</div>	
		<!-- Fin de Main -->
		
		<!-- Footer -->
		<footer id="footer">
			<a href="#"><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>Tekno2000</a>
			<a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contacto</a>
			<a href="#"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>Quienes Somos</a>
		</footer>

		
		
		<!-- Fin de Footer -->
		
	
  	
  
  <!-------------SCRIPTS---------------->
  		<!-- jQuery -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <!--Bootstrap JS -->
	    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	   	<!--Mi JS -->
	    <script src="js/web.js"></script>
	</body>  
</html>