	<?php 

	include_once '../Models/clsConx.php';

	include_once '../Models/clsCourses.php';

	$cursos=getcursos(conectar());

	require '../Views/courses.php';



	 ?>