<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar Sesion</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="./Estilos2.css">
</head>
<body>
	<div class="container">
		<form action="validar.php" method="POST" >
			<h1>Iniciar Sesion </h1>
			<p> Usuarios <input type="text" placeholder="Ingrese su nombre" name = "usuario" ></p>
			<p> Contraseña <input type="password" placeholder="Ingrese su contraseña" name = "contraseña" ></p>
			<input type = "submit" value="Ingresar">
			<a  href="registrarse.php"> Registrarse </a>
		</form>
		
	</div>
</body>
</html>