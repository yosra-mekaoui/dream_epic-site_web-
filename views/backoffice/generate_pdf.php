<?php

require('fpdf.php');
 $db= new PDO('mysql:host=localhost;dbname=yosra', 'root', '');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('Image1.png',10,6);
    $this->SetFont('Arial','B',16);
    $this->ln();
    $this->SetFont('Times','',20);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(150,8,'List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
 function headerTable(){
    $this->SetFont('times','B',12);
    $this->cell('id_ticket',1,0,'c');
    $this->Cell(110,10,'date_achat',1,0,'C');
    //$this->Cell(70,10,'qr_code',1,0,'C');
    $this->Cell(70,10,'id_event',1,0,'C');
    $this->Cell(70,10,'idTalent',1,0,'C');
    $this->ln(); 

 }
 function viewTable($db){
    $this->SetFont('Times','',12);
    $liste=$db->query('select * from ticket inner join evenement on ticket.id_event=evenement.id_event');
    while($data= $liste->fetch(PDO::FETCH_OBJ)){
        $this->Cell(25,10,$data->id_ticket,1,0,'C');
        $this->Cell(25,10,$data->date_achat,1,0,'L');
        //$this->Cell(70,10,$data->qr_code,1,0,'C');
        $this->Cell(70,10,$data->nom_event,1,0,'L');
        $this->Cell(25,10,$data->idTalent,1,0,'L');
        $this->ln();
    }
 }
}
$pdf = new PDF();
//header
$pdf->AddPage('L','A4',0);
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
?>