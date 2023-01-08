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
                        <h2>Tareas del dia <?=$_POST['fecha']?></h2>
                        <hr>

                        <table class="table table-info table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tarea</th>
      <th scope="col">Descripción</th>
      <th scope="col">Estado</th>
      <th scope="col">terminar</th>
    </tr>
  </thead>
  <tbody>
    
    <?php $tareas = search($conexion,$_POST['fecha']);

    if( $tareas != false){
          $conta = 1;
        while ($tarea = mysqli_fetch_assoc($tareas)): ?>
        <tr>
            <td spoce="row"><?=$conta++?></td>
            <td><?=$tarea['nombre']?></td>
            <td><?=$tarea['descripcion']?></td>
            <td>En proceso</td>
            <td><a class="activar" href="action.php?id=<?=$tarea['id']?>"><ion-icon class="icono" name="thumbs-down-outline"></ion-icon></a> </td>
            </tr>
        <?php endwhile; 
      
      } else{



      }?>
        



  </tbody>
</table>


<h2>Tareas acabadas</h2>
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
    
    <?php $tareasyes = searchYes($conexion,$_POST['fecha']);

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