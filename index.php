<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar Sesion</title>
</head>
<body>
	<div class="container">
		<form action="validar.php" method="POST" >
			<h1>Iniciar Sesion </h1>
			<p> Usuarios <input type="text" placeholder="Ingrese su nombre" name = "usuario" ></p>
			<p> Contraseña <input type="password" placeholder="Ingrese su contraseña" name = "contraseña" ></p>
			<input type = "submit" value="Ingresar">
			<input  type = "submit" value="Registrarse">
		</form>
	</div>
</body>
</html>