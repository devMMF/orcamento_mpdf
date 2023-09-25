<?php
use Mpdf\Mpdf;
require_once 'pdf/vendor/autoload.php';
require_once '_pdf_header_footer.php';
require_once '_pdf_content.php';

$config = array(
    'format' => 'A4',
    'margin_left' => 10,
    'margin_right' => 10,
    // 'margin_top' => 0,
    // 'margin_bottom' => 0,
    'margin_header' => 10,
    'margin_footer' => 10,
    'orientation' => 'P',
    'setAutoTopMargin' => 'stretch',        // Define a margem superior
    'setAutoBottomMargin' => 'stretch',     // Define a margem inferior
    'autoMarginPadding' => 0,          // Define o espaçamento entre o conteúdo e a margem
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
$mpdf->SetHTMLHeader($header);           // Define o cabeçalho
$mpdf->SetHTMLFooter($footer);           // Define o rodapé
$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($content,\Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output($nome_arquivo,'I');
