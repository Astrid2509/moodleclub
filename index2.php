<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['user']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Conqui Virtual</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Astrid Menchú de León">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="https://files.adventistas.org/institucional/es/sites/20/2015/08/TopoSitioConquistadores.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Día del Conquistador</h4>
				  <p>
				 
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/pañoleta.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Semana de la Pañoleta</h4>
				  <p>
				  Durante una semana portamos la pañoleta de nuestro Club 
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="https://directorioadventistavenezuela.files.wordpress.com/2012/10/422603_453765338002145_1744097462_n.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Campamento 2020 </h4>
				  <p>
				 Campamento que se realizara en Petén del 7 al 11 de abril. UNION GUATEMALTECA.
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>Todos nuestros cursos</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Aventureros</h4>
					<a href="aventureros.php"><small>Ver detalles</small></a>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Conquistadores</h4>
					<a href="conquis.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Guías Mayores</h4>
					<a href="guias.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Lider Juvenil</h4>
					<a href="liju.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Evaluaciones</h4>
					<script src="https://apis.google.com/js/platform.js" async defer></script>

<div class="g-sharetoclassroom" data-size="32" data-url="https://classroom.google.com/u/0/c/MjA4MzE1MzA4MTda" ></div>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Videos y clases en vivo</h4>
					<a href="video.php"><small>Ver detalles</small></a>
				</div>
			</div>

	 
			<div class="span12">
				<div class="well well-small">
					<h4 >Ideales</h4>
					<a href="inicio.php"><small>Ver detalles</small></a>

					
					<h4>Himnos de  Aventureros, Conquistadores y Guías Mayores</h4>
					<a href="himnos.php"><small>Ver detalles</small></a>


					<h4>Calendario de actividades</h4>
					<iframe src="https://calendar.google.com/calendar/embed?src=la82fhqvmuiun0s12go613i12c%40group.calendar.google.com&ctz=America%2FGuatemala" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

				</div>
			</div>
		
			
			
</div>
<h3>Nuestros cursos mas sobresalientes</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Certificaciones</h3>	
	<img src="https://solanair.com/wp-content/uploads/2018/05/certificado.png" alt="#"/>
	<div class="caption">
	<a class="pull-right" href="certificaciones.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Medallones</h3>	
	<img src="https://i.pinimg.com/originals/66/09/dc/6609dc50e2d1c0965c89ddf0db804f24.png" />
	<div class="caption">
	<h5> Descripción del Curso</h5>	
	<p align="justify">
	
Los medallones de plata y Oro, son dos programas diseñados para generar actividades recreativas y de testificación, tomando como base el desarrollo de hábitos de ejercitación física de los jóvenes, siendo que ellos cuentan con grandes habilidades físicas.
Este programa lo puede cumplir cualquier miembro de la iglesia o visita aunque, el medallón de plata también forma parte de las clases avanzadas, Viajero y Guía, del club de Conquistadores.
	<a class="pull-right" href="medallon.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Especialidades</h3>	
	<img src="http://4.bp.blogspot.com/_RMrknxCpEos/TTUamtu7BfI/AAAAAAAAAEw/7rq8BdjPsHg/s400/ESP2.png"/>
	<div class="caption">
	<h5>Descripción de las especialidades</h5>	
	<p align="justify">
	
 La Asociación General ha autorizado algunas «certificaciones» que no se llaman especialidades. Usualmente requieren más trabajo y tiempo que una especialidad normal.
	</p>
	<a class="pull-right" href="especialidades.php">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Importante</h3>	
		<p>
			Si te asignaste cursos debes estar pendiente de tu classroom ya que ahi tendras las tareas pendientes.
		<br><br></b></b>
		Al culminar cada clase debes presentar un examen.
		</p>
	</div>
	</div>
	<div class="span6">
	<div class="well well-small">
		<h3> Lo que vendrá</h3>
		<h5>Nuevos cursos</h5>	
		<p>
		Tendremos una página actualizada y nuestros miembros podrán contar con todos nuestros cursos disponibles, asi como la visualización de nuevos cursos que se añadan a la página.
		
		</p>
		
	</div>
	</div>
	
	
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Astrid Menchú de León <br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>