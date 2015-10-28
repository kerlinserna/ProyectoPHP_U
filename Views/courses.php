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
		<link rel="stylesheet" href="../css/estiloscourses.css">
		<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
		</head>
	<body>
	<form action="../Controller/ctrlMatricula.php" method="POST" class="formcourses">
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
		<br>
		<br>
		<input type="text" name="cedula" class="input" required 
		placeholder="Ingrese Cédula del Estudiante">
		<br>
		<br>
		<input type="text" name="nombres" class="input" required 
		placeholder="Ingrese Nombre Completo">
		<br>
		<br>
		<input type="text" name="edad" class="input" required 
		placeholder="Ingrese Edad">
		<br>
		<br>
		<input type="text" name="telefono" class="input" required 
		placeholder="Ingrese Teléfono">
		<br>
		<br>
		<input type="text" name="celular" class="input" required 
		placeholder="Ingrese Celular">
		<br>
		<br>
		<input type="text" name="direccion" class="input" required 
		placeholder="Ingrese Dirección">
		<br>
		<br>
		<input type="text" name="codmatri" class="input" required 
		placeholder="Ingrese Código matrícula">
		<br><br>
		<form role="form" class="tipos">
		<h5>Tipo de Empleado</h5>
	    <label class="radio-inline">
	      <input type="radio" name="tprofe" value="decano" required>DECANO
	    </label>
	    <label class="radio-inline">
	      <input type="radio" name="tprofe" value="profesor" required>PROFESOR
	    </label>
	    <label class="radio-inline">
	      <input type="radio" name="tprofe" value="secretaria" required>SECRETARIA
	    </label>
	    <h5>Forma de Pago</h5>
	    <label class="radio-inline">
	      <input type="radio" name="fpago" value="tdebito" required>TDEBITO
	    </label>
	    <label class="radio-inline">
	      <input type="radio" name="fpago" value="tcredito" required>TCREDITO
	    </label>
	    <label class="radio-inline">
	      <input type="radio" name="fpago" value="efectivo" required>EFECTIVO
	    </label>
	    <br>
	    <br>
	  <input type="submit" name="btnaceptar" class="btn btn-primary" 
	  value="Inscribir" id="btnaceptar"/>
	  </form>
	</form>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js">
	</script>
	<script src="../js/bootstrap.min.js"></script>
	</body>
	</html>