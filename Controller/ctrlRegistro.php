<?php 

	$codempl=$_POST['codempl'];
	$cedula=$_POST['cedula'];
	$nombres=$_POST['nombres'];
	$email=$_POST['email'];
	$clave=$_POST['clave'];

	require '../Models/clsConx.php';

	$con=conectar();

	require '../Models/clsRegistro.php';

	nuevoEmpleado($con,$codempl,$cedula,$nombres,$email,
	$clave);
 ?>