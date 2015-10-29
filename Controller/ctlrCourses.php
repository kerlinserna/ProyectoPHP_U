	<?php 
	include_once '../Models/clsConx.php';

	include_once '../Models/clsCourses.php';

	$cursos=getcursos(conectar());
	$fpagos=getformasdePago(conectar());
	$templ=getTipoEmpleado(conectar());

	require '../Views/courses.php';



	 ?>