<?php 
    session_start();

		if(!isset($_SESSION['usuario'])) 
		{
		header("Location:../Views/login.php?Mensaje=No has iniciado Sesión para editar Cursos");
		}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Editar Cursos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/editcourses.css">
  <script src="https://code.jquery.com/jquery-1.11.2.min.js">
  </script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
	</head>
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
	<form action="../Controller/ctrlEditCourse.php" method="POST" name="reg" class="reg">
      <div class="alert alert-info">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><h2>Informacion!</h2></strong>
    Al Momento de insertar un curso,ingresa cualquier código,
    ya que el sistema lo creará automáticamente
  </div>
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
   <br>  
  <?php 
  if (isset($_REQUEST["Mensaje"])) {
    
    $mensaje=$_REQUEST["Mensaje"];
    echo "<div class='alert alert-info' id='myAlert'>";
    echo "<a href='#'' class='close'>&times;</a>";
    echo "<img src='../img/me.png'>";
    echo "<h4><strong>Información!</strong></h4>";
    echo "<h5>$mensaje</h5>";
  }
 ?>
  </div>
  <select name="opcion" class="combobox" id="opcion">
  <option value="edit" id="edit">Editar Curso</option>
  <option value="delete" id="delete">Eliminar Curso</option>
  <option value="insert" id="insert">Insertar Curso</option>
  </select>
    <div class="question">
  <h5 id="titulo">Código Curso:</h5>
    <input type="text" name="codcurso" id="codcurso" class="inputs"
    onkeypress="return numeros(event)" required/>
  </div>
    <div class="question">
   <h5>Nuevo Nombre Curso:</h5>
    <input type="text" name="nombre" class="inputs" required/>
  </div>
   <h5>Nuevo Número de Horas:</h5>
    <input type="text" name="horas" class="inputs" 
    onkeypress="return numeros(event)" required/>
  </div>
  <br>
  <div class="margin">
<input type="submit" name="aceptar" value="Aceptar" class="btn btn-primary">
<input type="reset" name="borrar" value="Borrar" class="btn btn-danger">
</div>
</form>
 <form action="../Controller/ctrlEditCourse.php" method="POST"
     name="reg" class="reg">
    <input type="submit" name="inicio" class="btn btn-success" 
    value="Cerrar Sesión">
    <br>
    <br>
    </form>
<script>
$(document).ready(function(){
    $(".close").click(function(){
    $("#myAlert").alert("close");
    });
});
</script>
</body>
</html>