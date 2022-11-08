<?php  

require_once '../config/conexion.php';


mysqli_select_db($conexion, 'crud');  
$sql = "SELECT * FROM `tbl_registro`;";  
$setRec = mysqli_query($conexion, $sql);  
$columnHeader = '';  
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
 ?> 