<?php

require_once 'includes/conexion.php'; 
require_once 'includes/funciones.php'; 
$id = $_GET['id'];
$action = $_GET['action'];

if( $action == "update"){

    updateTarea ($conexion,$id);
    header('Location: index.php ');

} else if ($action == "delete"){

    deleteTarea ($conexion,$id);
    header('Location: index.php ');

} else if ($action == "change"){

    updateHoy ($conexion,$id);
    header('Location: index.php ');

}

