<?php


$usuario=$_POST['usuario'];

$clave=$_POST['clave'];

require '../Models/ClsLogin.php';

	if (login($usuario,$clave)) 
	{
		session_start();
		$_SESSION['usuario']=$usuario;
 		header("Location:ctlrCourses.php");
	}
	else
	{
	header("Location:../Views/login.php?Mensaje=Usuario o clave no válidos");	 
	}

 ?>