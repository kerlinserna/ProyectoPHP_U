		<?php
		session_start();

		if(!isset($_SESSION['usuario'])) 
		{
		header("Location:../Views/login.php?Mensaje=No has iniciado Sesión para los cursos");
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
		<link rel="stylesheet" href="../css/estiloscourses.css">
		<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
		</head>
		<style>
  p
{
  color: red;
  font-family: 1.5em;
  text-align: center;
}
form li a
{
	text-decoration: none;
	font-size: 1.5em;
	color: #337AB7;
	list-style-type: none;
}
li{
	list-style-type: none;
}
  </style>
  <script>
  function numeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789";
    especiales = [8,37,39,46];
 
    tecla_especial = false
    for(var i in especiales){
 if(key == especiales[i]){
     tecla_especial = true;
     break;
        } 
    }
 
    if(letras.indexOf(tecla)==-1 && !tecla_especial)
        return false;
}
  </script>
	<body>
	<form action="../Controller/ctrlMatricula.php" method="POST" class="formcourses">
	<h2>Courses of CC</h2>
	<li><a href="../Controller/ctrlEditCourse.php">Edita Los cursos de CC
	</a></li>
	<br>
	  <?php 

if (isset($_REQUEST["Mensaje"])) {
  
  $mensaje=$_REQUEST["Mensaje"];
  echo "<p>$mensaje</p>";
}
 ?>
		<select name="ccursos" class="combobox">
		<?php 
		//Cargar cursos al combo
		foreach($cursos as $fila )
		 {

		   echo "<option value='".$fila['codigo_curso']."'>".
		   $fila['titulo_curso'];

		 }
		 
		 ?>
		</select>
		<br>
		<br>
		<input type="text" name="cedula" class="input" required 
		placeholder="Ingrese Cédula del Estudiante" onkeypress="return numeros(event)">
		<br>
		<br>
		<input type="text" name="nombres" class="input" required 
		placeholder="Ingrese Nombre Completo">
		<br>
		<br>
		<input type="text" name="edad" class="input" required 
		placeholder="Ingrese Edad" onkeypress="return numeros(event)">
		<br>
		<br>
		<input type="text" name="telefono" class="input" required 
		placeholder="Ingrese Teléfono" onkeypress="return numeros(event)">
		<br>
		<br>
		<input type="text" name="celular" class="input" required 
		placeholder="Ingrese Celular" onkeypress="return numeros(event)">
		<br>
		<br>
		<input type="text" name="direccion" class="input" required 
		placeholder="Ingrese Dirección">
		<br>
		<br>
		<input type="text" name="codmatri" class="input" required 
		placeholder="Ingrese Código matrícula" onkeypress="return numeros(event)">
		<br><br>
		<h5>Tipo de Empleado</h5>
	 <select name="templeado" class="combobox">
		<?php 

		foreach($templ as $fila )
		 {
		 	//Cargar cargos de empleado al combo
		   echo "<option value='".$fila['codigo_cargo']."'>".
		   $fila['descripcion_cargo'];

		 }
		 
		 ?>
		</select>
	    <h5>Forma de Pago</h5>
		<select name="fpago" class="combobox">
		<?php 

		foreach($fpagos as $fila )
		 {
		 //Cargar forma de pago al combo
		   echo "<option value='".$fila['CODIGO_PAGO']."'>".
		   $fila['NOMBRE_PAGO'];

		 }
		 
		 ?>
		</select>
	    <br>
	    <br>
	  <input type="submit" name="btnaceptar" class="btn btn-primary" 
	  value="Inscribir" id="btnaceptar"/>
	</form>
	 <form action="../Controller/ctrlMatricula.php" method="POST"
     name="reg" class="reg">
     <center><input type="submit" name="inicio" class="btn btn-success" 
    value="Cerrar Sesión"></center>
    <br>
    <br>
    </form>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js">
	</script>
	<script src="../js/bootstrap.min.js"></script>
	</body>
	</html>