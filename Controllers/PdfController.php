<?php
require_once(__ROOT__.'/Core/fpdf.php');
require_once(__ROOT__.'/Models/OrderModel.php');

class PDF extends FPDF{
    function Header()
{
	// Logo
	$this->Image(__ROOT__.'public/assets/logo.png',10,6,30);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Move to the right
	$this->Cell(80);
	// Title
	$this->Cell(30,10,'Your Order',1,0,'C');
	// Line break
	$this->Ln(20);
}
}
$ordertable= new OrdersModel();
$order=$ordertable->orderDetails($_GET[0]);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Roboto','',12);
foreach ($order as $value)
	$pdf->Cell(0,10,$value,0,1);
$pdf->Output();