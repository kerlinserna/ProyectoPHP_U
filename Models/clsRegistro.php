<?php 

	function nuevoEmpleado($conn,$codempl,$cedula,$nombres,$email,
	$clave)
	{
		$sql = "INSERT INTO tblempleado (codempleado,nrodoc_empl,
		nombre_empl,usuario_prof,clave_prof)
		VALUES ('$codempl','$cedula','$nombres','$email','$clave')";

		if ($conn->query($sql) === true)
		{

		header("Location:../Views/registro.php?Mensaje=Nuevo Empleado Creado");
		} 
		else 
		{

    	header("Location:../Views/registro.php?Mensaje=Ocurrió un error");

		}
		$conn->close();
	} 




 ?>