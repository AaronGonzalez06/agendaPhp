<?php


function index ($conexion){
    
    $sql = "select tar.nombre, tar.descripcion ,tar.id from tarea tar inner join dia di on di.id=tar.id_dia where di.dia= curdate() and tar.fin = 'no';";
     $tarea=mysqli_query($conexion, $sql);
     $resul = array();
     if ($tarea && mysqli_num_rows($tarea) !=0) {
         
        $resul = $tarea; 
        return $resul;
     } else{
      return false;

     }  
};

function indexYes ($conexion){
    
   $sql = "select tar.nombre, tar.descripcion from tarea tar inner join dia di on di.id=tar.id_dia where di.dia= curdate() and tar.fin='yes';";
    $tarea=mysqli_query($conexion, $sql);
    $resul = array();
    if ($tarea && mysqli_num_rows($tarea) !=0) {
        
       $resul = $tarea; 
       return $resul;
    } else{
      return false;

    } 
};

function validar ($conexion,$fecha){
    
   $sql = "select dia from dia where dia='$fecha';";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};



function newTarea ($conexion,$tarea,$descripcion,$fecha){
    
   $sql = "INSERT INTO tarea (id_dia,nombre,descripcion,fin) values ((select id from dia where dia = '$fecha'),'$tarea','$descripcion','no');";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};

function newFecha ($conexion,$fecha){
    
   $sql = "INSERT INTO dia (dia)VALUES ('$fecha');";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};


function updateTarea ($conexion,$id){
    
   $sql = "update tarea set fin='yes' where id=$id;";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};



function pendiente ($conexion){
    
   $sql = "select di.dia fecha,tar.* from tarea tar inner join dia di on di.id=tar.id_dia where tar.fin='no' and di.dia <curdate() order by fecha desc;";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};


function acabadas ($conexion){
    
   $sql = "select di.dia fecha,tar.* from tarea tar inner join dia di on di.id=tar.id_dia where tar.fin='yes' order by fecha desc;";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};


//pagina proximos

function proximas ($conexion){
    
   $sql = "select di.dia fecha,tar.* from tarea tar inner join dia di on di.id=tar.id_dia where tar.fin='no' and di.dia > curdate();";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};






function diaProximo ($conexion){
    
   $sql = "select dia from dia where dia > curdate();";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};


function diferenciaDia ($fecha){

   $hoy = date("Y-m-d");
$fecha1= new DateTime($hoy);
$fecha2= new DateTime($fecha);
$diff = $fecha1->diff($fecha2);
return $diff->days;


};




function search ($conexion,$fecha){
    
   $sql = "select di.dia fecha,tar.* from tarea tar inner join dia di on di.id=tar.id_dia where di.dia='$fecha' and tar.fin='no';";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};


function searchYes ($conexion,$fecha){
    
   $sql = "select di.dia fecha,tar.* from tarea tar inner join dia di on di.id=tar.id_dia where di.dia='$fecha' and tar.fin='yes';";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};


function diaHistorial ($conexion){
    
   $sql = "select di.dia dia,count(*) yes from tarea tar inner join dia di on di.id=tar.id_dia where di.dia < curdate()  group by di.dia order by di.dia desc;";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};
//select dia from dia where dia < curdate() order by dia desc;
//

function tareasHistorial ($conexion,$fecha){
    
   $sql = "select di.dia fecha,tar.* from tarea tar inner join dia di on di.id=tar.id_dia where di.dia='$fecha';";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};


function tareasPendientes ($conexion,$fecha){
    
   $sql = "select di.dia fecha,tar.* from tarea tar inner join dia di on di.id=tar.id_dia where di.dia='$fecha' and tar.fin='no';";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};



function diaPendientes ($conexion){
    
   $sql = "select di.dia fecha,count(*) total from tarea tar inner join dia di on di.id=tar.id_dia where di.dia < curdate() and tar.fin='no' group by di.dia order by di.dia desc;";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};



function deleteTarea ($conexion,$id){
    
   $sql = "delete from tarea where id=$id;";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};



function pentienteHistorial ($conexion,$dia){
    
   $sql = "select di.dia dia,count(*) yes from tarea tar inner join dia di on di.id=tar.id_dia where di.dia < curdate() and dia='$dia'  and tar.fin='no' group by di.dia order by di.dia desc;";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};


function cosasPendientesHistorial ($conexion,$dia){
    
   $sql = "select di.dia dia,count(*) no from tarea tar inner join dia di on di.id=tar.id_dia where di.dia < curdate() and tar.fin='no' and di.dia='$dia'  group by di.dia order by di.dia desc;";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};


function cosasYesHistorial ($conexion,$dia){
    
   $sql = "select di.dia dia,count(*) yes from tarea tar inner join dia di on di.id=tar.id_dia where di.dia < curdate() and tar.fin='yes' and di.dia='$dia'  group by di.dia order by di.dia desc;";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};


function updateHoy ($conexion,$id){
    
   $sql = "update tarea set id_dia = (select id from dia where dia=curdate()) where id= $id;";
    $fecha=mysqli_query($conexion, $sql);
    $resul = array();
    if ($fecha && mysqli_num_rows($fecha) !=0) {
        
       $resul = $fecha; 
       return $resul;
    } else{
     return false;

    }  
};
