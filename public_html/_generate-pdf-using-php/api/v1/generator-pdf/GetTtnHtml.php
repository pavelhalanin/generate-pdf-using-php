<?php

$HOME = strlen($_SERVER['DOCUMENT_ROOT']) != 0 ? $_SERVER['DOCUMENT_ROOT'] : '';

class GetTtnHtml {
    static function getParamOrOnNotIssetReturnEmptySymbol($param) {
        return isset($_POST["$param"]) && strlen($_POST["$param"]) > 0 ? $_POST["$param"] : "&nbsp;";
    }

    static function getHtml($params = []) {
        global $HOME;
        $text_color = "red";

        ob_start();
        include_once "$HOME/_generate-pdf-using-php/api/v1/generator-pdf/ttn2016.php";
        $data = ob_get_clean();

        return $data;
    }
}
