<table class="table table-primary table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tarea</th>
      <th scope="col">Descripción</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    
    <?php $tareasyes = indexYes($conexion);

if( $tareasyes != false){
          $conta = 1;
        while ($tareayes = mysqli_fetch_assoc($tareasyes)): ?>
        <tr>
            <td spoce="row"><?=$conta++?></td>
            <td><?=$tareayes['nombre']?></td>
            <td><?=$tareayes['descripcion']?></td>
            <td><ion-icon name="medal-outline"></ion-icon></td>
            </tr>
        <?php endwhile;
        }?>
        



  </tbody>
</table>