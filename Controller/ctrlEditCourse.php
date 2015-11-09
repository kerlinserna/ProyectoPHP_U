<?php

	require '../Models/clsConx.php'; 
	$con=conectar();
	require '../Models/clseditCourse.php';
	if (isset($_POST['inicio'])) 
		{
			session_start();
			$_SESSION['usuario']=NULL;
			session_destroy();	
			header("Location:../");
			return;
		} 	
	if (isset($_POST['aceptar'])) 
	{
		$codcurso=$_POST['codcurso'];
		$nombre=$_POST['nombre'];
		$horas=$_POST['horas'];
		$opcion=$_POST['opcion'];
		
		if ($opcion=="insert") 
			{
			   $con=conectar();
			   insertarCurso($con,$codcurso,$nombre,$horas);
			}
		elseif (validarCodigo($con,$codcurso,$nombre,$horas)) 
		{	
			if ($opcion=='edit')
			{
			$con=conectar();
			actualizarCurso($con,$codcurso,$nombre,$horas);
			}
			else
			{
				$con=conectar();
				eliminarCurso($con,$codcurso);
			}
		}
		else
		{
		header("Location:../Controller/ctrlEditCourse.php?Mensaje=Este código no existe");
		}
	}
	else
	{
		$cursos=getcursos($con);
		require '../Views/editCourse.php';
	}

 ?>