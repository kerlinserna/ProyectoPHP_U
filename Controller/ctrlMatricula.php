<?php 
		
		$cedcliente=$_POST['cedula'];
		$nombres=$_POST['nombres'];
		$edad=$_POST['edad'];
		$telefono=$_POST['telefono'];
		$celular=$_POST['celular'];
		$direccion=$_POST['direccion'];
		$codmatri=$_POST['codmatri'];
		$tprofe=$_POST['tprofe'];
		$fpago=$_POST['fpago'];

		require '../Models/clsConx.php';
		require '../Models/clsMatricula.php';

		matricula(conectar(),$ced,$nombres,$edad,$telefono,$celular,
	    $direccion,$codempl);

 ?>