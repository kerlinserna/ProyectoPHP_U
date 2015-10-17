<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Registro de Profesores en CC</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilosreg.css">
    <link rel="icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/logos-3/504/php-512.png">
   <script src="js/prefixfree.min.js"></script>   
  </head>
  <body>
    <form action="validar.php" method="POST" name="reg" class="reg">
    <div class="header">
        <img src="me.png" id="yo"/>
  <h1>registro de empleados cc</h1>
  </div>
  <div class="question">
  <h5>Nombres:</h5>
    <input type="text" required/>
  </div>
  <div class="question">
  <h5>Apellidos:</h5>
    <input type="text" required/>
  </div>
  <div class="question">
  <h5>Email:</h5>
    <input type="email" required/>
  </div>
  <div class="question">
  <h5>Clave:</h5>
    <input type="password" required/>
  </div>
    <div class="question">
    <h5>Cofirme Clave:</h5>
    <input type="password" required/>
  </div>
<input type="submit" name="aceptar" value="Aceptar" class="submit">
<input type="reset" name="borrar" value="Borrar" class="submit">
</form>
  </body>
</html>
