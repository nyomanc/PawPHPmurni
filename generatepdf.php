<?php
ini_set("session.auto_start", 0);
require("fpdf/fpdf.php");
	include 'koneksi.php';
$query = mysqli_query($link,"Select * FROM print_order ") or die (mysqli_error($link));
$pdf=new FPDF();
	$pdf->AddPage(L,A4,0);
	$pdf->SetFont("Arial","B",10);
	$pdf->Cell(210,10,"Laporan Transaksi",1,1,'C');
	$pdf->SetFont("Arial","B",10);
	$pdf->Cell(30,10,"Id Transaksi",1,0,'C');
	$pdf->Cell(30,10,"nama user",1,0,'C');
	$pdf->Cell(30,10," pages Count",1,0,'C');
	$pdf->Cell(30,10,"Copy",1,0,'C');
	$pdf->Cell(30,10,"paper Type",1,0,'C');
	$pdf->Cell(30,10,"Bindings",1,0,'C');
	$pdf->Cell(30,10,"Total",1,1,'C');
	$no=1;
	while($row = mysqli_fetch_array($query))
{		
		$pdf->SetFont("Arial","B",10);
		$pdf->Cell(30,10,$no,1,0);
		$pdf->Cell(30,10,"nyonyo",1,0);
        $pdf->Cell(30,10,$row['page'],1,0);
        $pdf->Cell(30,10,$row['copy'],1,0);
        $pdf->Cell(30,10,$row['paper_type'],1,0);
        $pdf->Cell(30,10,$row['binding'],1,0);
        $pdf->Cell(30,10,$row['total'],1,1);      
		$no++;

}
ob_end_clean();
$pdf->Output(); 
?>