

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./Estilos2.css">
  </head>
  <body>

   
    <h1>Registrarse</h1>
    <span> <a href="index.php">Iniciar Sesion</a></span>
    <form action="validarR.php" method="POST">
	<p> Usuarios <input type="text" placeholder="Nombre de usuario" name = "usuario" ></p>
	<p> Contraseña <input type="password" placeholder="Ingrese Contraseña" name = "contraseña" ></p>
	<p> Confirme Contraseña <input type="password" placeholder="Confirme Contraseña" name = "ccontraseña" ></p>
      <input type="submit" value="Registrarse">
    </form>
  </body>
</html>