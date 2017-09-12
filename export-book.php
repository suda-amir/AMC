<?php
$conn = mysqli_connect("localhost", "root", "", "amc");  

 
 
$setSql = "SELECT * FROM `student`";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "prn_no" . "\t" . "Name" . "\t" . "acad_year" . "\t" . "branch" . "\t" . "college" . "\t". "mobile_number" . "\t" . "password" . "\t" . "division" . "\t" . "roll" . "\t";  
  
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
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>