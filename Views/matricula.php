<?php 
    	session_start();

		if(!isset($_SESSION['usuario'])) 
		{
		header("Location:../Views/login.php?Mensaje=No has iniciado Sesión para la matricula");
		}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Matrícula</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet"  href="../css/normalize.css">
	<link rel="stylesheet" href="../css/estilosmatri.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
	</head>
   </head>
	<body>
	<form action="../Controller/ctrlMatricula.php" method="POST">
	  <div class="alert alert-info">
	  <img src="../img/me.png">
	  <br>
    <h3><strong>Información!</strong></h3>
    <?php 
	if (isset($_REQUEST["Mensaje"])) {
	  
	  $mensaje=$_REQUEST["Mensaje"];
	  echo "<h5>$mensaje</h5>";
	}
 ?>
 <input type="submit" name="inicio" class="btn btn-success" value="Cerrar Sesión">
  </div>
  </form>
</body>
</html>