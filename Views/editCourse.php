<?php 
session_start();

		if (!isset($_SESSION['usuario'])) 
		{
		header("Location:../Views/login.php?Mensaje=No has iniciado Sesión");
		}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Editar Cursos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/editcourses.css">
	<link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
	</head>
	<body>
	<form action="../Controller/ctrlRegistro.php" method="POST" name="reg" class="reg">
    <img src="../img/me.png" id="yo"/>
  <h2>editar cursos</h2>
  <div class="container">           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Horas</th>
      </tr>
    </thead>
    <tbody>
    	<?php 

		foreach($cursos as $fila )
		 {
		 	//Cargar cargos de empleado al combo
		   	echo "<tr>";
			echo "<td>".$fila['codigo_curso']."</td>";
			echo "<td>".$fila['titulo_curso']."</td>";
			echo "<td>".$fila['nhoras_curso']."</td>";
			echo "</tr>";

		 }
		 
		 ?>
    </tbody>
  </table>
</div>
  <?php 

	if (isset($_REQUEST["Mensaje"])) {
	  
	  $mensaje=$_REQUEST["Mensaje"];
	  echo "<p>$mensaje</p>";
	}
 ?>
    <div class="question">
  <h5>Código Curso:</h5>
    <input type="text" name="codempl" class="inputs" required/>
  </div>
    <div class="question">
  <h5>Cédula:</h5>
    <input type="text" name="cedula" class="inputs" required/>
  </div>
   <h5>Nuevo Nombre Curso:</h5>
    <input type="text" name="cedula" class="inputs" required/>
  </div>
   <h5>Nuevo Número de Horas:</h5>
    <input type="text" name="cedula" class="inputs" required/>
  </div>
  <br>
  <br>
  <div class="margin">
<input type="submit" name="aceptar" value="Aceptar" class="btn btn-primary">
<input type="reset" name="borrar" value="Borrar" class="btn btn-danger">
</div>
</form>
</body>
</html>