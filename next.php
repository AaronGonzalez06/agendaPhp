<?php require_once './includes/hear.php'; ?>

    <div class="container-fluid border">
        <div class="row">
            <header class="col-12 bg-primary text-while p-2 pt-3 pl-4">
                Agenda Personal 
            </header>

            <nav class="col-12 bg-secondary text-while">
                <ul class="row w-50">
                    <li class="col"><a href="index.php">inicio</a></li>
                    <li class="col"><a href="pendientes.php">pendiente</a></li>
                    <li class="col"><a href="next.php">Proximas tareas</a></li>
                    <li class="col"><a href="history.php">historial</a></li>
                </ul>

                <?php require_once './includes/search.php'; ?>

            </nav>

            <section id="content" class="col-12">
                <div class="row">
                    <section id="products" class="col-12 border">
                        <h2>Proximas tareas.</h2>
                        <hr>


<div class="accordion" id="accordionExample">




  <?php $tareasyes = diaProximo($conexion);

if( $tareasyes != false){
        while ($tareayes = mysqli_fetch_assoc($tareasyes)): ?>

  <div class="accordion-item">
    <h2 class="accordion-header" id="heading<?=$tareayes['dia']?>">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$tareayes['dia']?>" aria-expanded="false" aria-controls="collapse<?=$tareayes['dia']?>">
      <?=$tareayes['dia']?> ------ faltan <?=diferenciaDia ($tareayes['dia'])?> dias para hacer las tareas indicadas.
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


        <tr class="table-info">
            <td spoce="row"><?=$tareahisto['nombre']?></td>
            <td><?=$tareahisto['descripcion']?>  </td>
            <td><ion-icon name="alarm-outline"></ion-icon></td>
            </tr>

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