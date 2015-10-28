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
 ?>