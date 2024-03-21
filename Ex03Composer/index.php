<?php

require_once __DIR__ . '/vendor/autoload.php';

$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

$pdf->SetMargins(15, 15, 15);
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);
$pdf->Write(0, 'Exemplo de PDF gerado com TCPDF', '', 0, 'C', true, 0, false, false, 0);
$pdf->Ln();
$pdf->Write(0, 'Este é um PDF simples gerado usando a biblioteca TCPDF.');

$pdf->Output('exemplo.pdf', 'D');
