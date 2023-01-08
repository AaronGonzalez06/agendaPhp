<aside class="col-4 border d-none d-md-block">
                        <h2>Añadir tarea </h2>
                        <form method="post" action="add.php">
                        <input type="text" name="Tarea" placeholder="Nueva tarea" /><br/><br/>
                        <textarea type="text" name="Descripcion" placeholder="Descripcion"></textarea><br/><br/>
                        <input type="date" name="Fecha" value="<?= date("Y-m-d")?>" /><br/><br/>
                        <input type="submit" value="Actualizar" />
                        </form>
                        
                    </aside>