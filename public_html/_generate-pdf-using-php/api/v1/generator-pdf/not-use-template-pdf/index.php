<?php

try {
    $HOME = strlen($_SERVER['DOCUMENT_ROOT']) != 0 ? $_SERVER['DOCUMENT_ROOT'] : '';

    include_once "$HOME/_generate-pdf-using-php/libs/mpdf/vendor/autoload.php";
    include_once "$HOME/_generate-pdf-using-php/api/v1/generator-pdf/GetTtnHtml.php";
    include_once "$HOME/_generate-pdf-using-php/helpers/TtnDateHelper.php";

    if (!isset($_POST['submit'])) {
        http_response_code(400);
        echo "Вы не сделали submit через HTML форму";
        exit;
    }

    $mpdf = new \Mpdf\Mpdf([
        'default_font_size' => 7,
        'format' => [210, 297], // A4 размер (ширина, высота в мм)
        'margin_left' => 0,
        'margin_right' => 0,
        'margin_top' => 0,
        'margin_bottom' => 0,
        'margin_header' => 0,
        'margin_footer' => 0,
    ]);

    $html = GetTtnHtml::getHtml([
        'ttn_date' => TtnDateHelper::getTtnDate_byIsoDate($_POST['ttn_date']),
        'unp_gruzootpravitel' => $_POST['unp_gruzootpravitel'],
        'unp_gruzopoluchatel' => $_POST['unp_gruzopoluchatel'],
        'unp_zakazchik_auto' => $_POST['unp_zakazchik_auto'],
        'automobil' => isset($_POST['automobil']) && strlen($_POST['automobil']) > 0 ? $_POST['automobil'] : "&nbsp;",
        'pricep' => isset($_POST['pricep']) && strlen($_POST['pricep']) > 0 ? $_POST['pricep'] : "&nbsp;",
    ]);
    $mpdf->WriteHTML($html);
    $result_pdf_name = date('Y-m-d_H-i-s') . '_TTN.pdf';
    $mpdf->Output($result_pdf_name, "D");
}
catch(Throwable $exception) {
    http_response_code(500);
    echo "<pre style='color: red;'>";
    print_r($exception);
    echo "</pre>";
    exit;
}
