<?php 

	function conectar()
	{
	  try
	   {
	   	$conexion=new mysqli("localhost","root","","cursoscapacitando");
		if ( $conexion->connect_errno ) 
		{
		   die("Fallo al conectar a BD: (" . $conexion->connect_errno . ") " . $conexion->connect_error);
		   
		}
		 return $conexion;	

	   } catch (Exception $e)
	    {
	   	echo "Error de Conexión ".$e->getMessage()."\n";
		}
/*		return $conexion;	*/
	}

   function CerrarConx( $conexion )
    {
		$conexion->close();
    }
 ?>