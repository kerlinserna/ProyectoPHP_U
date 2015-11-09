<?php 
		if (isset($_POST['inicio'])) 
		{
			session_start();
			$_SESSION['usuario']=NULL;
			session_destroy();	
			header("Location:../");
			return;
		}
/*		session_start();
		$_SESSION['usuario']="jdzapata";*/

		require '../Models/clsConx.php';
		$con=conectar();
		$ced=$_POST['cedula'];
		$cod=$_POST['codmatri'];
		require '../Models/clsCourses.php';
		
		if ( !validarCedula($con,$ced) || !validarmatri(conectar(),$cod)) 
		{
header("Location:../Controller/ctlrCourses.php?Mensaje=El cliente o la matrícula ya existe");
		return;
		}
		
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