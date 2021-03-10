<!DOCTYPE html>
<html>
<head>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>
	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Conqui Virtual</title>
</head>
<body background="https://i.ytimg.com/vi/2nkgxyWzbrk/maxresdefault.jpg" style="background-attachment: fixed" >
	<center><div class="tit"><h2 style="color: #0000FF; ">Inicio de sesión</h2>
		<center><div class="Ingreso">
			



<p>e-mail: <input type="text" name="e-mail" size="35"/></p>
<p>contraseña: <input type="password" name="contraseña"/><br/>

        <button onclick="location.href='principal.php'">Aceptar</button>

</form>
		</form>
<br>
	</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>