<?php 

include 'bd.php';

error_reporting(0);

session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: index.html");
}

if (isset($_POST['submit'])) {
	$usuario = $_POST['usuario'];
	$contraseña = md5($_POST['contraseña']);
	$ccontraseña = md5($_POST['ccontraseña']);

	if ($contraseña == $ccontraseña) {
		$sql = "SELECT * FROM t_usuarios WHERE usuario='$usuario'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO t_usuarios (usuario, contraseña)
					VALUES ('$usuario, '$contraseña')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registro de usuario completo')</script>";
				$usuario = "";
				$contraseña = "";
				$_POST['contraseña'] = "";
				$_POST['ccontraseña'] = "";
			} else {
				echo "<script>alert('Error')</script>";
			}
		} else {
			echo "<script>alert('El usuario ya exsiste')</script>";
		}
		
	} else {
		echo "<script>alert('Contraseña no coincidente.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Registrarse</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" >
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Ingrese usuario" name="usuario" value="<?php echo $usuario; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Contraseña" name="contraseña" value="<?php echo $_POST['contraseña']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['ccontraseña']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Registrase</button>
			</div>
			<p class="login-register-text">Tener una cuenta<a href="index.php">Entre aquí</a>.</p>
		</form>
	</div>
</body>
</html>