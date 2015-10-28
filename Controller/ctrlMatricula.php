<?php 

		$cedcliente=$_POST['cedula'];
		$nombres=$_POST['nombres'];
		$edad=$_POST['edad'];
		$telefono=$_POST['telefono'];
		$celular=$_POST['celular'];
		$direccion=$_POST['direccion'];
		$codmatri=$_POST['codmatri'];
		$tprofe=$_POST['tprofe'];
		$fpago=$_POST['fpago'];

		echo $fpago;
		echo $tprofe;

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