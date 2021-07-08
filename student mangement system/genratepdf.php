<?php
require_once("config.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM student");
$header = $db_handle->runQuery("SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='student' 
    AND `TABLE_NAME`='student'");

require('fpdf/fpdf.php');
$pdf = new FPDF('p','mm','a3');
$pdf->AddPage();
$pdf->SetFont('Arial','B',6);		
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(15.5,10,$column_heading,1);
}
foreach($result as $row) {
	$pdf->SetFont('Arial','',6);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(15.5,10,$column,1);
}
$pdf->Output();
?>