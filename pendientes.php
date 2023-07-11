<?php require_once './includes/hear.php'; ?>

    <div class="container-fluid border">
        <div class="row">
            <header class="col-12 bg-primary text-while p-2 pt-3 pl-4">
            <h1>Agenda personal</h1>
            </header>

            <nav class="col-12 bg-secondary text-while d-flex menuMod">
                    <a class="enlace" href="index.php">inicio</a>
                    <a class="enlace" href="pendientes.php">pendiente</a>
                    <a class="enlace" href="next.php">Proximas tareas</a>
                    <a class="enlace" href="history.php">historial</a>
                <?php require_once './includes/search.php'; ?>

            </nav>

            <section id="content" class="col-12">
                <div class="row">
                    <section id="products" class="col-12 border">
                        <h2>Cuentas pendientes.</h2>
                        <hr>


<div class="accordion" id="accordionExample">

  <?php $tareasyes = diaPendientes($conexion);

if( $tareasyes != false){
        while ($tareayes = mysqli_fetch_assoc($tareasyes)): ?>

  <div class="accordion-item">
    <h2 class="accordion-header" id="heading<?=$tareayes['fecha']?>">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$tareayes['fecha']?>" aria-expanded="false" aria-controls="collapse<?=$tareayes['fecha']?>">
      <?=$tareayes['fecha']?> -------- total de tareas pendientes: <?=$tareayes['total']?>
      </button>
    </h2>
    <div id="collapse<?=$tareayes['fecha']?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$tareayes['fecha']?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
 


      <table class="table table-info table-hover">
  <thead>
    <tr>
      <th scope="col">Tarea</th>
      <th scope="col">Descripción</th>
      <th scope="col">Estado</th>
      <th scope="col">Pasar a hoy</th>
    </tr>
  </thead>
  <tbody>


      
<?php $tareashistorial = tareasPendientes($conexion,$tareayes['fecha']);
if( $tareashistorial != false){
  while ($tareahisto = mysqli_fetch_assoc($tareashistorial)): ?>


    <?php if( $tareahisto['fin'] == 'no' ):?>

        <tr class="table-danger">
            <td spoce="row"><?=$tareahisto['nombre']?></td>
            <td><?=$tareahisto['descripcion']?></td>
            <td><a class="activar" href="action.php?id=<?=$tareahisto['id']?>&action=update"><ion-icon  class="icono" name="thumbs-down-outline"></ion-icon></a></td>
            <td><a href="action.php?id=<?=$tareahisto['id']?>&action=change"><ion-icon  class="icono" name="airplane-outline"></ion-icon></a></td>

            </tr>

            <?php else:?>
        
              <tr>
            <td spoce="row"><?=$tareahisto['nombre']?></td>
            <td><?=$tareahisto['descripcion']?></td>
            <td><ion-icon name="medal-outline"></ion-icon></td>
            </tr>


            <?php endif;?>




<?php endwhile;
  }?>



</tbody>
</table>


      
      </div>
    </div>
  </div>
  <?php endwhile;
        }?>







</div>





                    </section>
                </div>

            </section>

            <footer class="col-lg-12 bg-info d-none">
                Aaron gonzalez alvarez
            </footer>

        </div>

    </div>

</body>

</html>