<?php 

	function getcursos($conexion)
	{
	  $sql="select * from tblcursos";

	  $consulta=$conexion->query($sql);

	  while ($fila=$consulta->fetch_array()) 
	 { 
	
		$cursos[]=$fila;

	 }
	 return $cursos;
	}

 ?>