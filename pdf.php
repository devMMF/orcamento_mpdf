<?php
use Mpdf\Mpdf;
require_once 'pdf/vendor/autoload.php';
require_once '_pdf_header_footer.php';
require_once '_pdf_content.php';

$config = array(
    'format' => 'A4',                       // Define o formato do papel
    'margin_left' => 10,                    // Define a margem esquerda
    'margin_right' => 10,                   // Define a margem direita
    'margin_header' => 10,                  // Define a margem superior
    'margin_footer' => 10,                  // Define a margem inferior
    'orientation' => 'P',                       // Define a orientação da página
    'setAutoTopMargin' => 'stretch',        // Define a margem superior
    'setAutoBottomMargin' => 'stretch',     // Define a margem inferior
    'autoMarginPadding' => 0,               // Define o espaçamento entre o conteúdo e a margem
);

$nome_arquivo = 'orcamento_' . date('d-m-Y') . '.pdf';

$mpdf = new Mpdf($config);

$css = file_get_contents('css/pdf_style.css');

$content = getBodyPdf();
$header = getHeaderPdf();
$footer = getFooterPdf();
$content = utf8_encode($content);
$header = utf8_encode($header);
$footer = utf8_encode($footer);
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($content,\Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output($nome_arquivo,'I');
