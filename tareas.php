<?php
 include 'bd.php';
 include 'validar.php';

$ID = "SELECT ID FROM usuarios";
 $sql = "SELECT ID_tarea, tarea FROM t_tarea WHERE ID = $ID";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Lista de Tareas</title>
  </head>
  <body>
    
    <h2 th:text="'Listado de tareas de ' +  $_SESSION['usuario']"></h2>

    <div class="w-50 m-auto">
    <form action="insertar.php" method="post">
        <div class="form-group">
            <label for="title">Tarea</label>
            <input class="form-control" type="text" name="tarea" id="tarea" placeholder="Ingrese tarea" Required>

        </div><br>
        <button class="btn btn-success">Agregar Tarea</button>
    </form>

    </div><br>
    <hr class="bg-dark w-50 m-auto">
    <div class="lists w-50 m-auto my-4">
        <h1>Tu lista de tareas</h1>
        <div id="lists">
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col" name="ID_Tarea">Nro Tarea</th>
      <th scope="col">Lista de tareas</th>
    <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php

                include 'bd.php';


                    $_SESSION['ID']=$ID;

            $sql = "SELECT * FROM t_tarea WHERE ID = $ID ";
            $result = mysqli_query($conexion,$sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $ID_tarea = $row['ID_tarea'];
                    $tarea = $row['tarea'];
                 ?>
                <tr>
                <td><?php echo $ID_tarea ?></td>
                <td><?php echo $tarea ?></td>
                <td>
                <a href = "eliminar.php?ID_tarea=<?php echo $ID_tarea ?>" class="btn btn-danger btn-sm">Eliminar</a>
                <a href = "editartarea.php?ID_tarea=<?php echo $ID_tarea ?>" class=" btn btn-suceesbtn-sm">Editar</a>
                </tr>
                </tr>
                <?php
              }
        }
    ?>
   
  </tbody>
</table>
        </div>
    </div>
  </body>
</html>
