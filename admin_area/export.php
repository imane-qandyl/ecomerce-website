<?php
require('../fpdf185/fpdf.php');
$con=mysqli_connect('localhost','root','','Mystore');
$result=mysqli_query($con,'select * from product');
$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();
//set the font
$pdf->SetFont('Arial','B',12);
//header
$pdf->Cell(30, 10,'product_id',1);
$pdf->Cell(60, 10,'product_title',1);
$pdf->Cell(30, 10, 'product_price',1);
$pdf->ln();
$pdf->SetFont('Arial','B',12);
//data from product
while($row=mysqli_fetch_assoc($result)){
$pdf->Cell(30, 10, $row['product_id'],'1');
$pdf->Cell(60, 10, $row['product_title'],'1');
$pdf->Cell(30, 10, $row['product_price'],'1');
$pdf->ln();
}
//output the pdf document
$pdf->Output();


?>