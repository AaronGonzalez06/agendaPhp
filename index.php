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
                    <section class="col-8 border d-flex sectionMod">
                        <h2>Tareas para hoy <?= date("Y-m-d")?></h2>
                        <hr>

                        <?php require_once './includes/tableNow.php'; ?>
<h2>Tareas acabadas</h2>
<?php require_once './includes/tableFinis.php'; ?>
<img class="grafica" src="prueba.php" />

                    </section>
                    <?php require_once './includes/aside.php'; ?>
                </div>

            </section>

           

            <footer class="col-lg-12 bg-info d-none">
                Aaron gonzalez alvarez
            </footer>

        </div>

    </div>

</body>

</html>