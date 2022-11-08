<?php  

require_once '../config/conexion.php';

mysqli_select_db($conexion, 'crud');  
$sql = "SELECT `id_registro`, `fecha_entrada`, `fecha_salida`, `id_mesa`, `nom_empleado`, `num_comensales` FROM `tbl_registro` INNER JOIN tbl_empleado on tbl_registro.id_camarero=tbl_empleado.id_empleado";  
$setRec = mysqli_query($conexion, $sql);  
$columnHeader = "";  
$columnHeader = "ID Registro" . "\t" . "Fecha Entrada" . "\t" . "Fecha Salida" . "\t" . "Mesa" . "\t". "Camarero" . "\t". "Comensales" . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  

  redirect('../view/registros.php');

 ?> 