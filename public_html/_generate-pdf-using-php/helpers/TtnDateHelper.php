<?php

class TtnDateHelper {
    static function getTtnDate_byIsoDate($isoDate) {
        $dateTime = new DateTime($isoDate);
        $date = $dateTime->format('d');
        $month = $dateTime->format('m');
        $year = $dateTime->format('Y');

        $monthDict = [
            '01' => 'января',
            '02' => 'февраля',
            '03' => 'марта',
            '04' => 'апреля',
            '05' => 'мая',
            '06' => 'июня',
            '07' => 'июля',
            '08' => 'августа',
            '09' => 'сентября',
            '10' => 'октября',
            '11' => 'ноября',
            '12' => 'декабря',
        ];

        $textMonth = $monthDict[$month];

        $result = "$date $textMonth $year г.";
        return $result;
    }
}
