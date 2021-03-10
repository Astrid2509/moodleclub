<!DOCTYPE html>

<div align="center"><IMG src="images/conqui.png"></div> 
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<title>Subir archivos</title>
<h4 align="center"> Si deseas Asignarte a algun curso de la clase de Aventureros. Da click aqui, y coloca el código de acceso según la clase a la que deseas ingresar</h4>


         <script   src="https://apis.google.com/js/platform.js" async defer></script>

<div class="g-sharetoclassroom" data-size="32" data-url="https://classroom.google.com/u/0/c/MjA4MzE1MzA4MTda" ></div>
<h2>En el área de descargas podras encontrar archivos que te ayudaran a coplementar las clases </h2>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<button onclick="location.href='index2.php'">Regresar</button>
   

<table align="center"  style="width:35%">
  <tr>
    <th>Clase</th>
    <th>Código</th> 
    
  </tr>
  <tr>
    <td>Amigo</td>
    <td>alni50y</td>
   
  </tr>
  <tr>
    <td>Compañero</td>
    <td>b38pt7</td>
    
  </tr>
  <tr>
    <td>Explorador</td>
    <td>1sa2ytv</td>
  </tr>
   <tr>
    <td>Orientador</td>
    <td>hv4q5u
</td>
  </tr>
  <tr>
    <td>Viajero</td>
    <td>498d8y
</td>
  </tr>
  <tr>
    <td>Guía</td>
    <td>77djwk

</td>
  </tr>
</table>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
<style>
.navbar {
	position: relative;
	min-height: 50px;
	margin-bottom: 5px;
}
</style>
</head>
<body>
<div role="navigation" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      
      
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
      </ul>
    </div>
    <!--/.nav-collapse --> 
  </div>
</div>

<div class="container">
  <div class="row">
      <div class="panel-body">
        <div class="col-lg-6">
   
  
<!--tabla-->
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Descargas Disponibles</h3>
      </div>
      <div class="panel-body">
   
<table class="table">
  <thead>
    <tr>
      <th width="7%">#</th>
      <th width="70%">Nombre del Archivo</th>
      <th width="13%">Descargar</th>
      
    </tr>
  </thead>
  <tbody>
<?php
$archivos = scandir("sub_conquis");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;
?>
<p>  
 </p>
         
    <tr>
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td><a title="Descargar Archivo" href="sub_conquis/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
      
    </tr>
 <?php }?> 

  </tbody>
</table>
</div>
</div>
<!-- Fin tabla--> 
  </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</body>
</html>
<STYLE>
  

  button{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
    position: sticky;
    bottom:30px;
    left: 500px;
</STYLE>