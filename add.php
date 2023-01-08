<?php 
require_once 'includes/conexion.php';
require_once 'includes/funciones.php';

$tarea = $_POST['Tarea'];
$descripcion = $_POST['Descripcion'];
$fecha = $_POST['Fecha'];


$validar = validar($conexion,$fecha);

    if( $validar == false){
        //aqui para cuando la fecha sea nueva
        newFecha ($conexion,$fecha);
        newTarea ($conexion,$tarea,$descripcion,$fecha);
        header('Location: index.php ');
    
    } else{
        //aqui cuando la fecha se repite
        newTarea ($conexion,$tarea,$descripcion,$fecha);
        header('Location: index.php ');
  
    }