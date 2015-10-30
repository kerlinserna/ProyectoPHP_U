<?php 
	
	function actualizarCurso($conn,$cod,$nombre,$horas)
	{
		try {

		$sql ="CALL act('$cod','$nombre','$horas');";
		$conn->query($sql);		
		if($conn->affected_rows > 0)
       {
       header("Location:../Controller/ctrlEditCourse.php?Mensaje=Registro Actualizado");
		
       }
       else
     	{
     	header("Location:../Controller/ctrlEditCourse.php?Mensaje=Ocurrió un error en la actualización");
		
     	}	
		} catch (Exception $e) {
			echo $e;
		}
		
		$conn->close();
	}
	function getcursos($con)
	{
	  $sql="call tablaCursos";

	 $consulta=$con->query($sql);

	while ($fila=$consulta->fetch_array()) 
	{
	
		$cursos[]=$fila;

	}

	 $consulta->close();
	 return $cursos;
	}
	function validarCodigo($conn,$codcurso)
	{
	    $sql="call validarCod($codcurso);";

		$total = mysqli_num_rows(mysqli_query($conn,$sql));
		if($total==0)
		{
		return false;
		}else
		{
		return true;
		}	
	}
	function eliminarCurso($conn,$cod)
	{
		try {

		$sql ="CALL eliminarCurso('$cod');";
		$conn->query($sql);		
		if($conn->affected_rows > 0)
       {
       header("Location:../Controller/ctrlEditCourse.php?Mensaje=Registro Eliminado");
		
       }
       else
     	{
     	header("Location:../Controller/ctrlEditCourse.php?Mensaje=Ocurrió un error en la Eliminacón");
		
     	}	
		} catch (Exception $e) {
			echo $e;
		}
		
		$conn->close();
	}
	function insertarCurso($conn,$cod,$nombre,$horas)
	{
		try {

		$sql ="CALL insertarCurso('$nombre','$horas');";
		$conn->query($sql);		
		if($conn->affected_rows > 0)
       {
       header("Location:../Controller/ctrlEditCourse.php?Mensaje=Registro Insertado");
		
       }
       else
     	{
     	header("Location:../Controller/ctrlEditCourse.php?Mensaje=Ocurrió un error en la Inserción");
		
     	}	
		} catch (Exception $e) {
			echo $e;
		}
		
		$conn->close();
	}
	

	

 ?>