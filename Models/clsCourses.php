<?php 

	function getcursos($conexion)
	{
	  $sql="call combo_cargarcursos";

	  $consulta=$conexion->query($sql);

	  while ($fila=$consulta->fetch_array()) 
	 { 
	
		$cursos[]=$fila;

	 }
	 return $cursos;
	}
	function getformasdePago($conexion)
	{
	  $sql="call comboPago";

	  $consulta=$conexion->query($sql);

	  while ($fila=$consulta->fetch_array()) 
	 { 
	
		$formas[]=$fila;

	 }
	 return $formas;
	}

	function getTipoEmpleado($conexion)
	{
	  $sql="call comboEmpl";

	  $consulta=$conexion->query($sql);

	  while ($fila=$consulta->fetch_array()) 
	 { 
	
		$tipo[]=$fila;

	 }
	 return $tipo;
	}
	function validarCedula($conn,$cedula)
	{
	    $sql="call validarCedula('$cedula');";

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
	function validarmatri($conn,$cod)
	{
	    $sql="call validarCodMatri('$cod');";

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