<?php 
	
	
	function login($usuario,$clave)
	{
		
	mysql_connect('localhost','root') or die
	("Error al conectar " . mysql_error());
	mysql_select_db('cursoscapacitando') or die 
	("Error al seleccionar la Base de datos: " . mysql_error());
	 
    $result = mysql_query("SELECT * FROM tblempleado WHERE usuario_prof = '$usuario'");
	
	if($row = mysql_fetch_array($result))
	{

	if($row['clave_prof'] == $clave)
	{

	return true;

	 }
	 else
	 {
	 	return false;
	 }
	}
}

?>