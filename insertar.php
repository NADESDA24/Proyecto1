<?php


$tarea=$_POST['tarea'];


include 'bd.php';
$sql="INSERT INTO t_tareas (tarea,1)VALUES('$tarea','1')";

$result=mysqli_query($conexion, $sql);

if($result){
    header("location: ./tareas.php");
}
else{
    // echo "No se realizo conexcion";
}

?>