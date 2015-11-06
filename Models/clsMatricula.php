<?php 
	
	function matricula($conn,$ced,$nombres,$edad,$telefono,$celular,
	$direccion,$codempl,$codpago,$codmatri,$codcurso)
	{
		$sql = "call grabarCliente('$ced','$nombres','$edad',
		'$telefono','$direccion','$codempl','$codpago','$codmatri',
		'$codcurso','$celular');";

		if ($conn->query($sql) === true)
		{
		
		header("Location:../Views/matricula.php?Mensaje=Matrícula Exitosa");
		} 
		else 
		{
    	header("Location:../Views/matricula.php?Mensaje=Ocurrió un error en la matricula");

		}
		$conn->close();
	}

 ?>