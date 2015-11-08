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
		function validarCodEmpl($conn,$cod)
	{
	    $sql="call validarCodempl('$cod');";

		$total = mysqli_num_rows(mysqli_query($conn,$sql));
		if($total==0)
		{
	
		 	$conn->close();
			return true;
		}
		else
		{
			$conn->close();
			return false;
		}	
	} 
		function validarCedEmpl($conn,$ced)
	{
	    $sql="call validarCedEmpl('$ced');";

		$total = mysqli_num_rows(mysqli_query($conn,$sql));
		if($total==0)
		{
	
		 	$conn->close();
			return true;
		}
		else
		{
			$conn->close();
			return false;
		}	
	} 




 ?>