<?php
require_once ('./includes/conexion.php'); 
 require_once ('jpgraph/src/jpgraph.php');
 require_once ('jpgraph/src/jpgraph_bar.php');


$resultado= mysqli_query($conexion, "select di.dia dia,count(*) yes from tarea tar inner join dia di on di.id=tar.id_dia where di.dia < curdate() and tar.fin='yes' group by di.dia order by di.dia desc limit 7;");
$usuarios=array();
$horas=array();

while($row=$resultado->fetch_assoc()){
   $usuarios[]=$row['dia'];
   $horas[]=$row['yes'];
}

// Creamos el grafico
$grafico = new Graph(700, 400, 'auto');
$grafico->SetScale("textint");
$grafico->title->Set("Ultimos 7 dias");
$grafico->xaxis->title->Set("Dia");
$grafico->xaxis->SetTickLabels($usuarios);
$grafico->yaxis->title->Set("Tareas");
$barplot1 =new BarPlot($horas);
// Un gradiente Horizontal de morados
$barplot1->SetFillGradient("#BE81F7", "#E3CEF6", GRAD_HOR);
// 30 pixeles de ancho para cada barra
$barplot1->SetWidth(30);
$grafico->Add($barplot1);
$grafico->Stroke();
?>