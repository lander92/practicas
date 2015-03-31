<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Home</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    	<!-- Bootstrap CSS -->
    	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    	<!-- CSS Propio -->
    	<link href="css/servicios.css" rel="stylesheet"/>
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
			<section class="sidebar col col-sm-2" id="menuServicios">
				<ul class="nav nav-pills nav-stacked">
					<li id="servicio"><a href="#">Servicio Empresa</a></li>
					<li id="software"><a href="#">Software Gestión</a></li>
					<li id="asistencia"><a href="#">Asistencia Técnica</a></li>
				</ul>
			</section><!-- navegador -->
			<section class="main col col-sm-10" id="contenidoServicios">
				<div id="empresa">
					<h1>Servicio Empresa</h1>
       				<p>
       					Una de nuestras mayores actividades, es el servicio continuado a la empresa.
       					Los diferentes aspectos que abarcamos los podemos resumir en los siguientes puntos:<br>

       					Asesoramiento: Estudio y ayuda para elegir la opción óptima según las necesidades particulares de cada empresa.<br>

       					Instalación de las diferentes aplicaciones informáticas: con toda la complejidad de las redes, incluso de fibra óptica.<br>
       					
       					Por su financiación distinguimos tres tipos de compra:<br>
       				</p>	
       					<li>Compra directa</li>
						<li>Leasing-Renting</li>
						<li>Alquiler</li><br>
					<p>	
						Formación: Prestamos especial interés en formar al administrador de la red de la empresa y a los usuarios, en sus diferentes tareas específicas.<br>
						
						Servicio técnico continuado. Además de la instalación in situ y una garantía de tres años en equipos compatibles, el servicio técnico se da en la propia empresa y con un plazo de respuesta, según necesidades, de 24 horas. Además disponemos de los contratos de mantenimiento que son el complemento ideal para una mayor rapidez de respuesta.
       				</p>
       			</div>
       			<div id="gestion">
       				<h1>Software Gestion</h1>
       				<p>
       					En esta sección encontramos aquellos programas que se aplican a los diferentes sectores; hostelería, restauración, calzado, ropa,...<br>

       					Destacamos las soluciones SAGE<br>

       					Instaladas en más de 2.000.000 de empresas del mundo, están dirigidas a pequeñas y medianas empresas. Su capacidad modular casi le convierten en soluciones a medida.<br>
       				</p>	
       					<li>Contabilidad</li>
						<li>Gestión Comercial</li>
						<li>Terminal Punto de Venta (T.P.V.)</li>
						<li>E-commerce</li><br>
					
					<p>	
						Estas soluciones han sido homologadas por Microsoft y son compatibles con toda la gama de sus productos.<br>
						
						Las diferentes aplicaciones van acompañadas de su correspondiente formación y asistencia técnica personalizada.
       				</p>
				</div>
				<div id="tecnica">
					<h1>Asistencia Tecnica</h1>
       				<p>
       					Asistencia Tecnica
       				</p>
				</div>

			</section><!-- contenido -->
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
	    <!-- Mi JS -->
		<script src="js/servicios.js"></script>
	</body>  
</html>