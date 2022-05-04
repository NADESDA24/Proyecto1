<?php

  require 'bd.php';

  $mensaje = '';
  if(isset($_SESSION['usuario']))
  {
	  header("Location: index.php");
  }
  if(isset($_SESSION['submit']))
  {
	  $usuario = $_POST['usuario'];
	  $contraseña =md5($_POST['contraseña']);
	  $ccontraseña =md5($_POST['ccontraseña']);
  }
  if($contraseña=$ccontraseña)
  {
	$consulta = "SELECT * FROM t_usuarios where usuario ='$usuario'";
	$resultado = mysqli_query($conexion,$consulta);
	if(!$resultado->num_rows > 0){
		$consulta= "INSERT INTO t_usuarios (usuario, contraseña)";
		$resultado = mysqli_query($conexion,$consulta);
		if($resultado){
			echo"<script> alert('Usuario Registrado con exito')</script>";
			$usuario = "";
			$_POST['contraseña'] = "";
			$_POST['ccontraseña'] = "";
		}else{
			echo"<script> alert('Error')</script>";
		}
	}else{
		echo"<script> alert('El USUARIO ya existe')</script>";
	}
	 
  }else{
	echo"<script> alert('Las contraseñas no coinciden')</script>";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
  </head>
  <body>

    <?php if(!empty($mensaje)): ?>
      <p> <?= $mensaje ?></p>
    <?php endif; ?>
    <h1>Registrarse</h1>
    <span> <a href="index.php">Iniciar Sesion</a></span>
    <form action="Registrarse.php" method="POST">
	<p> Usuarios <input type="text" placeholder="Nombre de usuario" name = "usuario" ></p>
	<p> Contraseña <input type="password" placeholder="Ingrese Contraseña" name = "contraseña" ></p>
	<p> Confirme Contraseña <input type="password" placeholder="Confirme Contraseña" name = "usuario" ></p>
      <input type="submit" value="Registrarse">
    </form>
  </body>
</html>