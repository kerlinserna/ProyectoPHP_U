<?php
session_start();

$usuario=$_POST['usuario'];

$clave=$_POST['clave'];

require '../Models/ClsLogin.php';

	if (login($usuario,$clave)) 
	{
		$_SESSION['usuario']=$usuario;
		require 'ctlrCourses.php';
	}
	else
	{
	header("Location:../Views/login.php?Mensaje=Usuario o clave no válidos");			 
	}

 ?>