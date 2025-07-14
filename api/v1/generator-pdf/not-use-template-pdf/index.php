<?php

try {
    $HOME = strlen($_SERVER['DOCUMENT_ROOT']) != 0 ? $_SERVER['DOCUMENT_ROOT'] : '';

    include_once "$HOME/libs/mpdf/vendor/autoload.php";
    include_once "$HOME/api/v1/generator-pdf/GetTtnHtml.php";

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

    $html = GetTtnHtml::getHtml();
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
