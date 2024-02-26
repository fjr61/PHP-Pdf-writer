<?php

use setasign\Fpdi\Fpdi;

require_once('vendor/autoload.php');
$pdf= new Fpdi();
$Image= "C:\Users\OJT\Pictures\Form.png";
$Esig= "C:\Users\OJT\Pictures\Esig.png";

$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->Image($Image, 10, 10, 200, 250, "PNG");
$pdf->Image($Esig, 20, 255, 40, 15, "PNG");
$pdf->SetXY(30, 270); $pdf->Write(0, 'Signature');
$pdf->SetXY(25, 265); $pdf->Write(0, '_____________');


$names=[
    'Emily',
    'James',
    'Sophia',
    'Alexander',
    'Olivia',
    'William',
    'Ava',
    'Benjamin',
    'Mia',
    'Ethan',
    'Charlotte',
    'Michael',
    'Amelia',
    'Jacob',
    'Harper',
    'Daniel',
    'Evelyn',
    'Matthew',
    'Abigail',
    'Emma',
    'Elijah',
    'Isabella'
];

$teams=[
    'Front',
    'Back',
    'Tester',
    'Analyst',
    'Front',
    'Back',
    'Tester',
    'Analyst',
    'Front',
    'Back',
    'Tester',
    'Analyst',
    'Front',
    'Back',
    'Tester',
    'Analyst',
    'Front',
    'Back',
    'Tester',
    'Analyst',
    'Front',
    'Back'
];

$y=81;
for ($i = 0; $i <=21; ++$i) { 
    $pdf->SetXY(44, $y); $pdf->Write(0, $names[$i]);
    $pdf->SetXY(73, $y); $pdf->Write(0, $teams[$i]);
    $pdf->SetXY(99, $y); $pdf->Write(0, 'N/A');
    $pdf->SetXY(128, $y); $pdf->Write(0, 'N/A');
    $pdf->SetXY(152, $y); $pdf->Write(0, 'N/A');
    $pdf->SetXY(167, $y); $pdf->Write(0, 'N/A');
    $y+=8;
} 


$pdf->Output();


?>