<?php 
		require '../Models/clsConx.php';
		$con=conectar();
		require '../Models/clsCourses.php';
		$ced=$_POST['cedula'];

		if (!validarCedula($con,$ced)) 
		{
header("Location:../Controller/ctlrCourses.php?Mensaje=El cliente ya existe");
		return;
			}
		session_start();
		$_SESSION['usuario']="jdzapata";
		
		$cedcliente=$_POST['cedula'];
		$nombres=$_POST['nombres'];
		$edad=$_POST['edad'];
		$telefono=$_POST['telefono'];
		$celular=$_POST['celular'];
		$direccion=$_POST['direccion'];
		$codmatri=$_POST['codmatri'];
		$fpago=$_POST['fpago'];
		$codcurso=$_POST['ccursos'];
		$templeado=$_POST['templeado'];

		$con=conectar();
		require '../Models/clsMatricula.php';

		matricula($con,$cedcliente,$nombres,$edad,$telefono,$celular,
	    $direccion,$templeado,$fpago,$codmatri,$codcurso);

 ?>