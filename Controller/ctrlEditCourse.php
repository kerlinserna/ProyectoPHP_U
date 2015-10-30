<?php

	require '../Models/clsConx.php'; 
	require '../Models/clseditCourse.php'; 
	$con=conectar();
	$cursos=getcursos($con);
	require '../Views/editCourse.php';

	if (isset($_POST['aceptar'])) 
	{
		actualizarCurso($con);
	}
 ?>