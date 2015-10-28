<?php 

	function nuevoEmpleado($conn,$codempl,$cedula,$nombres,$email,
	$clave)
	{
		$sql ="CALL grabarempleado('$codempl','$cedula','$nombres',
		'$email','$clave');";

		if ($conn->query($sql) ===true)
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