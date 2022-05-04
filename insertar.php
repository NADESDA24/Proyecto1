<?php


$tarea=$_POST['tarea'];
$usuario = $_POST['usuario'];
session_start();
$_SESSION['usuario']=$usuario;


include 'bd.php';

$sql="INSERT INTO t_tarea (tarea, usuario)VALUES('$tarea','$usuario')";

$result=mysqli_query($conexion, $sql);

if($result){
    header("location: ./tareas.php");
}
else{
    // echo "No se realizo conexcion";
}

?>