<?php

class GetTtnHtml {
    static function getHtml($params = []) {
        $text_color = "red";

        ob_start();

        ?>

            <div style="padding-left: 0.7cm; width: 19.6cm;">
                <div style="padding-top: 0.7cm; padding-left: 4.6cm;">
                    <table style="border-collapse: collapse;">
                        <tr>
                            <td style="color: <?= $text_color ?>; text-align: center; border: 1px solid red;" height="34" width="32">
                                &nbsp;
                            </td>
                            <td style="color: <?= $text_color ?>; text-align: center; border: 1px solid red;" height="34" width="128">
                                Грузоотправитель
                            </td>
                            <td style="color: <?= $text_color ?>; text-align: center; border: 1px solid red;" height="34" width="126">
                                Грузополучатель
                            </td>
                            <td style="color: <?= $text_color ?>; text-align: center; border: 1px solid red;" height="34" width="128">
                                Заказчик автомобильной<br/>перевозки (плательщик)
                            </td>
                        </tr>
                        <tr>
                            <td style="color: <?= $text_color ?>; text-align: center; border: 1px solid red;" height="24">
                                УНП
                            </td>
                            <td style="color: <?= $text_color ?>; text-align: center; border: 1px solid red;" height="24">
                                <?= $params['unp_gruzootpravitel'] ?>
                            </td>
                            <td style="color: <?= $text_color ?>; text-align: center; border: 1px solid red;" height="24">
                                <?= $params['unp_gruzopoluchatel'] ?>
                            </td>
                            <td style="color: <?= $text_color ?>; text-align: center; border: 1px solid red;" height="24">
                                <?= $params['unp_zakazchik_auto'] ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div style="color: <?= $text_color ?>; padding-top: 2.8cm;">
                    <?= $params['ttn_date'] ?>
                </div>
                <div>
                    <div style="margin-top: -0.05cm;">
                        <div style="color: <?= $text_color ?>; display: block; float: left; width: 1.5cm;">Автомобиль</div>

                        <div style="color: <?= $text_color ?>; display: block; float: left; width: 8.3cm; margin-left: 0.1cm; border-bottom: 1px solid <?= $text_color ?>;">
                            <?= $params['automobil'] ?>
                        </div>

                        <div style="color: <?= $text_color ?>; display: block; float: left; width: 0.95cm; margin-left: 0.3cm;">Прицеп</div>

                        <div style="color: <?= $text_color ?>; display: block; float: left; width: 8.4cm; margin-left: 0.1cm; border-bottom: 1px solid <?= $text_color ?>;">
                            <?= $params['pricep'] ?>
                        </div>
                    </div>
                    <div>
                        <div style="color: <?= $text_color ?>; display: block; float: left; width: 1.5cm;">&nbsp;</div>

                        <div style="color: <?= $text_color ?>; display: block; float: left; width: 8.3cm; margin-left: 0.1cm; text-align: center; font-style: italic; font-size: 7px;">(марка, государственный номер)</div>

                        <div style="color: <?= $text_color ?>; display: block; float: left; width: 0.95cm; margin-left: 0.3cm;">&nbsp;</div>

                        <div style="color: <?= $text_color ?>; display: block; float: left; width: 8.4cm; margin-left: 0.1cm; text-align: center; font-style: italic; font-size: 7px;">(марка, государственный номер)</div>
                    </div>
                </div>
            </div>

        <?php

        $data = ob_get_clean();
        return $data;
    }
}
