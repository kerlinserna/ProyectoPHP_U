<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Courses</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet"  href="../css/normalize.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
	</head>
<body>
<form action="" class="formcourses">
<h2>Courses of CC</h2>
	<select name="usu" class="combobox">
	<?php 

	foreach($cursos as $fila )
	 {

	echo "<option value='".$fila['codigo_curso']."'>".$fila['titulo_curso'];

	 }

	 ?>
	 	</select>

</form>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js">
	</script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>