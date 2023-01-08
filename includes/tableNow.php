<table class="table table-info table-hover">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tarea</th>
      <th scope="col">Descripción</th>
      <th scope="col">Estado</th>
      <th scope="col">Eliminar</th>
      <th scope="col">terminar</th>
    </tr>
  </thead>
  <tbody>
    
    <?php $tareas = index($conexion);

    if( $tareas != false){
          $conta = 1;
        while ($tarea = mysqli_fetch_assoc($tareas)): ?>
        <tr>
            <td spoce="row"><?=$conta++?></td>
            <td><?=$tarea['nombre']?></td>
            <td><?=$tarea['descripcion']?></td>
            <td>En proceso</td>
            <td><a class="activarDelete" href="action.php?id=<?=$tarea['id']?>&action=delete"><ion-icon class="iconoDelete" name="skull-outline"></ion-icon></a> </td>
            <td><a class="activar" href="action.php?id=<?=$tarea['id']?>&action=update"><ion-icon class="icono" name="thumbs-down-outline"></ion-icon></a> </td>
            </tr>

        <?php endwhile; 
      
      } else{



      }?>
      


  </tbody>
</table>