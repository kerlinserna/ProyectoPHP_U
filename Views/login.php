<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet"  href="../css/normalize.css">
	<link rel="stylesheet"  href="../css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
	<title>Login de Cursos Capacitando|CC</title>
	<style type="text/css">
	body
	{
		background-color: #2196F3;
	}
	 #yo
	{
	width: 130px;
	height: 120px;
	margin-bottom: 20px;
	border-radius: 50%;
	}
	p
	{
		color: red;
		font-family: 1.5em;
		text-transform: uppercase;
	}
	</style>
</head>
<body>
<form action="../Controller/ctllLogin.php" method="POST" name="logincc" class="logincc">
	<img src="../img/me.png" id="yo"/>
	<br>
<input type="text" name="usuario" placeholder="Ingrese su usuario" class="margin" required>
<br>
<br>
<input type="password" name="clave" placeholder="Ingrese su clave" class="margin" required>
<br>
<br>
<a href="http://www.w3schools.com/bootstrap/bootstrap_buttons.asp">Olvidaste tu Contraseña?</a>
<br>
<a href="../Views/registro.php">Registrarse</a>
<br>
<input type="submit" name="btnaceptar" class="btn btn-primary" value="Aceptar" 
id="btnaceptar"/>
<input type="reset" name="btnaceptar" class="btn btn-danger" value="Cancelar"/>
<?php 

if (isset($_REQUEST["Mensaje"])) {
	
	$mensaje=$_REQUEST["Mensaje"];
	echo "<p>$mensaje</p>";
}
 ?>
</form>
</body>
</html>
