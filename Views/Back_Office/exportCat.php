<?php  

$connect = new mysqli('localhost', 'root', '');  
mysqli_select_db($connect, 'the_globe');  
$sql = "SELECT nom_cat FROM categories";  
$setRec = mysqli_query($connect, $sql);  

$columnHeader = '';  
$columnHeader = "" . "\t" ."Nom";  

$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= " " ."\t" . trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=ListeDesProduits.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

echo ucwords (" ". "\n" . $columnHeader . "\n" . $setData . "\n");  

?> 
 