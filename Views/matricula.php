<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Matricula</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet"  href="../css/normalize.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/estiloscourses.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
	</head>
	<style>
		  p
		{
		  color: red;
		  font-family: 3em;
		}
   </style>
   </head>
	<body>
	  <div class="alert alert-info">
    <strong>Info!</strong>
    	<?php 
	if (isset($_REQUEST["Mensaje"])) {
	  
	  $mensaje=$_REQUEST["Mensaje"];
	  echo "<p>$mensaje</p>";
	}
 ?>
  </div>
</body>
</html>