<?php 
$usuario=$_POST['usuario'];

$clave=$_POST['clave'];

require '../Models/ClsLogin.php';

	if (login($usuario,$clave)) 
	{
		require '../Controller/ctlrCourses.php';
	}
	else
	{
	header("Location:../Views/login.php?Mensaje=Usuario o clave no válidos");			 
	}

 ?>