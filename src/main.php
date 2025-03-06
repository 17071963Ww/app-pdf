<?php
require_once '../vendor/autoload.php';

$pdf = new \TCPDF(); 

function gerarPdf($texto) {
    global $pdf; 

    $pdf->AddPage();

    $pdf->SetFont('helvetica', '', 12);

    $pdf->Write(0, $texto);

    $pdf->Output('arquivo_gerado.pdf', 'I'); 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto']; 
    gerarPdf($texto); 
}
?>
