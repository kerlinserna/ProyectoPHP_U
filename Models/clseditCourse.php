<?php 
	

	function actualizarCurso($conn,$cod)
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
	function getcursos($conexion)
	{
	  $sql="call tablaCursos()";

	  $consulta=$conexion->query($sql);

	  while ($fila=$consulta->fetch_array()) 
	 { 
	
		$cursos[]=$fila;

	 }
	 return $cursos;
	}

	

 ?>