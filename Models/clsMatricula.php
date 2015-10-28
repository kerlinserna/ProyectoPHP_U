<?php 
	
	function matricula($conn,$ced,$nombres,$edad,$telefono,$celular,
	$direccion,$codempl)
	{
		$sql = "INSERT INTO tblcliente (Cedula_cli,Nombre_cli,
		Edad_cli,Telefono_cli,Celular_cli,Direccion_cli,
		cod_empl_cli)
		VALUES ('$codempl','$cedula','$nombres','$email','$clave')";

		if ($conn->query($sql) === true)
		{

		header("Location:../Views/registro.php?Mensaje=Nuevo Empleado Creado");
		} 
		else 
		{

    	header("Location:../Views/registro.php?Mensaje=Ocurrió un error");

		}
		$conn->close();
	}

/*INSERT INTO TBLCLIENTE
VALUES(@strCedCli,@strNombreCli,@IntEdad,@bigTelefonoCli,
@BigCelularCli,@strDirCli,@strCodEmple);
--Insertar datos del cliente
INSERT INTO TBLMATRICULA(COD_MATRI,CEDCLIENTE_MATRI,COD_EMPL_MATRI,
COD_PAGO_MATRI)
VALUES(@strCodMatri,@strCedCli,@strCodEmple,@strCodPago);
----INSERTAR DATOS DE LA MATRICULA
INSERT INTO TBLDETALLEMATRICULA
VALUES(@strCodMatri,@strTituloCurso,170000,1111);
----INSERTAR DATOS DE LA MATRICULA
IF(@@ERROR>0)
BEGIN
ROLLBACK TRANSACTION tx
SELECT 0 AS Rpta
Return
END
COMMIT TRANSACTION tx
SELECT @strCedCli AS Rpta
Return
END
END
go
*/

 ?>