	<?php 

	require '../Models/clsCourses.php';

	$cursos=getcursos(conectar());

	require '../Views/courses.php';


	 ?>