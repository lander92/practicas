<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    	<!-- Bootstrap CSS -->
    	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    	<!-- CSS Propio -->
    	<link href="css/about.css" rel="stylesheet"/>
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
			<div class="col-xs-12 col-md-7" id="descripcion">
				<p>
					Tekno 2000 es una empresa con amplia experiencia en el mundo inform�tico.
					Creada en 1986, su evoluci�n y crecimiento ha sido constante a lo largo de estos a�os.
				</p>
				<p>
					En estos momento la componen 8 personas divididas en los diferentes apartados:
				</p>
				<ul>
					<li><b>Comercial:</b> venta de productos inform�ticos en general. 
						Tenemos un catalogo de m�s de 15.000 productos. 
						Tambi�n nos dedicamos al alquiler de equipamiento inform�tico.
					</li><br>
					
					<li><b>Administrativo:</b> </li><br>
					
					<li><b>Servicio tecnico:</b> Actividad unida a la anterior.
						Implica el mantenimiento de los equipos inform�ticos instalados. 
						En este apartado caben destacar nuestros contratos de mantenimiento, 
						estando dirigidos principalmente al mantenimiento de las redes inform�ticas 
						instaladas en las empresas.
					</li><br>
					
					<li><b>Software de gesti�n:</b> Llevamos la distribuci�n del programa de gesti�n Sage
					</li><br>
					
					<li><b>Formaci�n:</b> disponemos de 2 aulas para 14 y 6 personas 
						en las que se dan regularmente cursos inform�ticos, 
						tanto a nivel b�sico como especializado. 
						Igualmente nos desplazamos a las empresas y damos formaci�n a nivel particular.
					</li><br>
				</ul>
				
				<p>
					Adem�s de otros colaboradores, especialmente en el campo de la formaci�n.
					Nuestra ubicaci�n central est� en San Sebasti�n, en la calle Azpeitia, 7-Bajo. 
					Adem�s disponemos de local comercial en Ir�n, en la calle Sebasti�n Errazu, 7-bajo, 
					as� como de una tienda virtual ubicada en la direcci�n electr�nica <a href="index.php">www.tekno2000.com.</a>
				</p>
				
			</div>
			<div class="col-xs-6 col-md-5" id="mapa">
			
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