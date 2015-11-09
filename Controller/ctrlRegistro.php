<?php 
	require '../Models/clsConx.php';
	require '../Models/clsRegistro.php';

	$codempl=$_POST['codempl'];
	$cedula=$_POST['cedula'];
	if ( !validarCodEmpl(conectar(),$codempl) || !validarCedEmpl(conectar(),
	$cedula ) ) 
	{
	header("Location:../Views/registro.php?Mensaje=Cédula o Código empleado ya existen");
	return;
	}

	
	$codempl=$_POST['codempl'];
	$cedula=$_POST['cedula'];
	$nombres=$_POST['nombres'];
	$email=$_POST['email'];
	$clave=$_POST['clave'];

	nuevoEmpleado(conectar(),$codempl,$cedula,$nombres,$email,
	$clave);
 ?>