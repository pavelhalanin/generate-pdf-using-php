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
        'text_color' => $_POST['text_color'],
        'ttn_date_string' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('ttn_date_string'),
        'unp_gruzootpravitel' => $_POST['unp_gruzootpravitel'],
        'unp_gruzopoluchatel' => $_POST['unp_gruzopoluchatel'],
        'unp_zakazchik_auto' => $_POST['unp_zakazchik_auto'],
        'automobil' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('automobil'),
        'pricep' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('pricep'),
        'k_putevomy_listy' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('k_putevomy_listy'),
        'voditel' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('voditel'),
        'name_1_zakazchik' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('name_1_zakazchik'),
        'name_2_zakazchik' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('name_2_zakazchik'),
        'name_gruzootpravitel' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('name_gruzootpravitel'),
        'name_gruzopoluchatel' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('name_gruzopoluchatel'),
        'osnovanie_otpuska' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('osnovanie_otpuska'),
        'pereadresovka' => GetTtnHtml::getParamOrOnNotIssetReturnEmptySymbol('pereadresovka'),
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
