<?php

require_once __DIR__ . '/vendor/autoload.php';

// Crie um novo objeto MPDF
$mpdf = new \Mpdf\Mpdf();

// Seu conteúdo HTML para o PDF
$html = '<h1>Meu Primeiro PDF com mPDF</h1>
<p>Este é um PDF gerado usando mPDF no PHP.</p>';

// Adicione o conteúdo HTML ao PDF
$mpdf->WriteHTML($html);

// Salve o PDF ou exiba
$mpdf->Output('meu_pdf.pdf', 'D'); // "D" para forçar o download

echo "PDF gerado com sucesso!";