<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Registro de Profesores en CC</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilosreg.css">
    <link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
   <script src="../js/prefixfree.min.js"></script>   
  </head>
  <style>
  p
{
  color: red;
  font-family: 1.5em;
  text-align: center;
}
  </style>
  <body>
    <form action="../Controller/ctrlRegistro.php" method="POST" name="reg" class="reg">
    <div class="header">
    <img src="../img/me.png" id="yo"/>
  <h1>registro de empleados cc</h1>
  </div>
  <?php 

if (isset($_REQUEST["Mensaje"])) {
  
  $mensaje=$_REQUEST["Mensaje"];
  echo "<p>$mensaje</p>";
}
 ?>
    <div class="question">
  <h5>Codigo Empleado:</h5>
    <input type="text" name="codempl" required/>
  </div>
    <div class="question">
  <h5>Cedula:</h5>
    <input type="text" name="cedula" required/>
  </div>
  <div class="question">
  <h5>Nombre Completo:</h5>
    <input type="text" name="nombres" required/>
  </div>
  <div class="question">
  <h5>Email:</h5>
    <input type="email" name="email" required/>
  </div>
  <div class="question">
  <h5>Clave:</h5>
    <input type="password" name="clave" required/>
  </div>
<input type="submit" name="aceptar" value="Aceptar" class="submit">
<input type="reset" name="borrar" value="Borrar" class="submit">
</form>
  </body>
</html>
