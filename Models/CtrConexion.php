<?php
class CtlConexion
{
	var $enlace;
    function Conectar( $servidor, $db, $usuario, $password )
    {
    	try
      	{
			$enlace = new mysqli( $servidor, $usuario, $password, $db );
			
			$mysqli = new mysqli("localhost", "root", "t00r00r", "my_shop");
			if ( $enlace->connect_errno ) 
			{
				die("Fallo al conectar a BD: (" . $enlace->connect_errno . ") " . $enlace->connect_error);
			}
			return $enlace;
      	}
      	catch ( Exception $e )
      	{
          	echo "Error de Conexión ".$e->getMessage()."\n";
      	}
    }

    function Cerrar( $enlace )
    {
		$enlace->close();
    }

    function EjecutarSQL( $enlace, $consulta )
    {
    	try
    	{
			$recordSet = $enlace->query( $consulta ) 
			return $recordSet;
		} 
    	catch ( Exception $e )
    	{
          	echo "Atención: ". $e->getMessage()."\n";
       }
    }
}
?>