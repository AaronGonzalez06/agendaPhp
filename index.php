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
                    <section id="products" class="col-8 border">
                        <h2>Tareas para hoy <?= date("Y-m-d")?></h2>
                        <hr>

                        <?php require_once './includes/tableNow.php'; ?>
<h2>Tareas acabadas</h2>
<?php require_once './includes/tableFinis.php'; ?>
<img src="prueba.php" />

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