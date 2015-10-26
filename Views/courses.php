	<?php 

	$sesion=$_SESSION['usuario'];

	if (!isset($sesion)) 
	{
	header("Location:../Views/login.php?Mensaje=No has iniciado Sesión");			 
	
	}
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Courses of CC</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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

	   echo "<option value='".$fila['codigo_curso']."'>".
	   $fila['titulo_curso'];

	 }
	 
	 ?>
	</select>
	<div class="container">            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  </div>
</form>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js">
	</script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>