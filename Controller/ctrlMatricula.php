<?php 
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

		require '../Models/clsConx.php';

		require '../Models/clsMatricula.php';

		matricula(conectar(),$cedcliente,$nombres,$edad,$telefono,$celular,
	    $direccion,$templeado,$fpago,$codmatri,$codcurso);

 ?>