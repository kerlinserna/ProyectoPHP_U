	<?php
	require '../Models/clsConx.php';

	require '../Models/clsCourses.php';

	$cursos=getcursos(conectar());
	$fpagos=getformasdePago(conectar());
	$templ=getTipoEmpleado(conectar());

	require '../Views/courses.php';
	 ?>