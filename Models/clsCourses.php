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
 ?>