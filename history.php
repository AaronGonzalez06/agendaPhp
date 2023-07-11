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
                    <section id="products" class="col-12 border ">
                        <h2>Historial de tareas.</h2>
                        <hr>


<div class="accordion" id="accordionExample">

  <?php $tareasyes = diaHistorial($conexion);

if( $tareasyes != false){
        while ($tareayes = mysqli_fetch_assoc($tareasyes)): ?>


<?php
 $diano = pentienteHistorial($conexion,$tareayes['dia']);
 if($diano == false ){
  $rowcount= 0;
 } else{
  $rowcount=mysqli_num_rows($diano);
 }


if($rowcount != 0):?>
  <div class="accordion-item prueba ">
<?php else:?>
  <div class="accordion-item">
<?php endif;?>
    <h2 class="accordion-header" id="heading<?=$tareayes['dia']?>">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$tareayes['dia']?>" aria-expanded="false" aria-controls="collapse<?=$tareayes['dia']?>">
      <strong><?=$tareayes['dia']?>   ----- Total de tareas: <?=$tareayes['yes']?>   ----- Total de Completadas: <?php

      $disi = cosasYesHistorial($conexion,$tareayes['dia']);
      if ( $disi == false){
      echo " 0";
      } else{
      $disi2 = mysqli_fetch_assoc($disi);
      echo $disi2['yes'];

}
      

      ?>   ----- Total de Pendientes: <?php 
      
      $dino = cosasPendientesHistorial($conexion,$tareayes['dia']);
      if ( $dino == false){
        echo " 0";
      } else{
        $dino2 = mysqli_fetch_assoc($dino);
        echo $dino2['no'];

      }
      
      ?>
      </strong>
      </button>
    </h2>
    <div id="collapse<?=$tareayes['dia']?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$tareayes['dia']?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
 
      <table class="table table-info table-hover">
  <thead>
    <tr>
      <th scope="col">Tarea</th>
      <th scope="col">Descripción</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>

      
<?php $tareashistorial = tareasHistorial($conexion,$tareayes['dia']);
if( $tareashistorial != false){
  while ($tareahisto = mysqli_fetch_assoc($tareashistorial)): ?>


    <?php if( $tareahisto['fin'] == 'no' ):?>

        <tr class="table-danger">
            <td spoce="row"><?=$tareahisto['nombre']?></td>
            <td><?=$tareahisto['descripcion']?>  - <?=$tareahisto['fin']?></td>
            <td><ion-icon name="thumbs-down-outline"></ion-icon></td>
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