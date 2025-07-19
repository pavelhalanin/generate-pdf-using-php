<?php

$italic_size = '6.9px';

?>

<div style="padding-left: 0.7cm; width: 19.6cm;">
    <!-- < < < < < < < < УНП -->
    <div style="padding-top: 0.7cm; padding-left: 4.6cm;">
        <table style="border-collapse: collapse;">
            <tr>
                <td
                    style="
                        color: <?= $params['text_color'] ?>;
                        text-align: center;
                    "
                    height="34"
                    width="32"
                >
                    &nbsp;
                </td>
                <td
                    style="
                        color: <?= $params['text_color'] ?>;
                        text-align: center;
                        border: 1px solid <?= $params['text_color'] ?>;
                    " 
                    height="34"
                    width="128"
                >
                    Грузоотправитель
                </td>
                <td
                    style="
                        color: <?= $params['text_color'] ?>;
                        text-align: center;
                        border: 1px solid <?= $params['text_color'] ?>;
                    " 
                    height="34"
                    width="126"
                >
                    Грузополучатель
                </td>
                <td
                    style="
                        color: <?= $params['text_color'] ?>;
                        text-align: center;
                        border: 1px solid <?= $params['text_color'] ?>;
                    " 
                    height="34"
                    width="128"
                >
                    Заказчик автомобильной<br/>перевозки (плательщик)
                </td>
            </tr>
            <tr>
                <td
                    style="
                        color: <?= $params['text_color'] ?>;
                        text-align: center;
                    "
                    height="24"
                >
                    УНП
                </td>
                <td
                    style="
                        color: <?= $params['text_color'] ?>;
                        text-align: center;
                        border: 1px solid <?= $params['text_color'] ?>;
                    " 
                    height="24"
                >
                    <?php echo $params['unp_gruzootpravitel']; ?>
                </td>
                <td
                    style="
                        color: <?= $params['text_color'] ?>;
                        text-align: center;
                        border: 1px solid <?= $params['text_color'] ?>;
                    " 
                    height="24"
                >
                    <?= $params['unp_gruzopoluchatel'] ?>
                </td>
                <td
                    style="
                        color: <?= $params['text_color'] ?>;
                        text-align: center;
                        border: 1px solid <?= $params['text_color'] ?>;
                    " 
                    height="24"
                >
                    <?= $params['unp_zakazchik_auto'] ?>
                </td>
            </tr>
        </table>
    </div>
    <!-- > > > > > > > > УНП -->
    <!-- < < < < < < < < Дата -->
    <div
        style="
            color: <?= $params['text_color'] ?>;
            padding-top: 2.8cm;
        "
    ><?= $params['ttn_date_string'] ?></div>
    <!-- > > > > > > > > Дата -->
    <!-- < < < < < < < < Авто -->
    <div>
        <div
            style="
                margin-top: -0.05cm;
            "
        >
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 1.5cm;
                "
            >
                Автомобиль
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 8.3cm;
                    margin-left: 0.1cm;
                    border-bottom: 1px solid <?= $params['text_color'] ?>;
                "
            >
                <?= $params['automobil'] ?>
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 0.95cm;
                    margin-left: 0.3cm;
                "
            >
                Прицеп
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 8.4cm;
                    margin-left: 0.1cm;
                    border-bottom: 1px solid <?= $params['text_color'] ?>;
                "
            >
                <?= $params['pricep'] ?>
            </div>
        </div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>; 
                    display: block;
                    float: left;
                    width: 1.5cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                &nbsp;
            </div>

            <div 
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 8.3cm;
                    margin-left: 0.1cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                (марка, государственный номер)
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 0.95cm;
                    margin-left: 0.3cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                &nbsp;
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 8.4cm;
                    margin-left: 0.1cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                (марка, государственный номер)
            </div>
        </div>
    </div>
    <!-- > > > > > > > > Авто -->
    <!-- < < < < < < < < Путевой лист -->
    <div>
        <div
            style="
                color: <?= $params['text_color'] ?>;
                display: block;
                float: left;
                width: 2.4cm;
            "
        >
            К путевому листу №
        </div>

        <div
            style="
                color: <?= $params['text_color'] ?>;
                display: block;
                float: left;
                width: 17.15cm;
                margin-left: 0.1cm;
                border-bottom: 1px solid <?= $params['text_color'] ?>;
            "
        >
            <?= $params['k_putevomy_listy'] ?>
        </div>
    </div>
    <!-- > > > > > > > > Путевой лист -->
    <!-- < < < < < < < < Водитель -->
    <div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 1.1cm;
                "
            >
                Водитель
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 18.45cm;
                    margin-left: 0.1cm;
                    border-bottom: 1px solid <?= $params['text_color'] ?>;
                "
            >
                <?= $params['voditel'] ?>
            </div>
        </div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 1.1cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                &nbsp;
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 18.45cm;
                    margin-left: 0.1cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                (фамилия и инициалы)
            </div>
        </div>
    </div>
    <!-- > > > > > > > > Водитель -->
    <!-- < < < < < < < < Заказчик -->
    <div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 5.95cm;
                "
            >
                Заказчик автомобильной перевозки (плательщик)
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 13.645cm;
                    margin-left: 0.1cm;
                    border-bottom: 1px solid <?= $params['text_color'] ?>;
                ">
                <?= $params['name_1_zakazchik'] ?>
            </div>
        </div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 19.65cm;
                    border-bottom: 1px solid <?= $params['text_color'] ?>;
                "
            >
                <?= $params['name_2_zakazchik'] ?>
            </div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 19.65cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                (наименование, адрес)
            </div>
        </div>
    </div>
    <!-- > > > > > > > > Заказчик -->
    <!-- < < < < < < < < Грузоотправитель -->
    <div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 2.20cm;
                "
            >
                Грузоотправитель
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 17.295cm;
                    margin-left: 0.1cm;
                    border-bottom: 1px solid <?= $params['text_color'] ?>;
                ">
                <?= $params['name_gruzootpravitel'] ?>
            </div>
        </div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 2.20cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                &nbsp;
            </div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 17.295cm;
                    margin-left: 0.1cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                (наименование, адрес)
            </div>
        </div>
    </div>
    <!-- > > > > > > > > Грузоотправитель -->
    <!-- < < < < < < < < Грузополучатель -->
    <div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 2.10cm;
                "
            >
                Грузополучатель
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 17.395cm;
                    margin-left: 0.1cm;
                    border-bottom: 1px solid <?= $params['text_color'] ?>;
                ">
                <?= $params['name_gruzopoluchatel'] ?>
            </div>
        </div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 2.10cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                &nbsp;
            </div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 17.395cm;
                    margin-left: 0.1cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                (наименование, адрес)
            </div>
        </div>
    </div>
    <!-- > > > > > > > > Грузополучатель -->
    <!-- < < < < < < < < Основание отпуска -->
    <div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 2.40cm;
                "
            >
                Основание отпуска
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 17.095cm;
                    margin-left: 0.1cm;
                    border-bottom: 1px solid <?= $params['text_color'] ?>;
                ">
                <?= $params['name_gruzopoluchatel'] ?>
            </div>
        </div>
    </div>
    <!-- > > > > > > > > Основание отпуска -->
    <!-- < < < < < < < < Переадресовка -->
    <div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 1.80cm;
                "
            >
                Переадресовка
            </div>

            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 17.695cm;
                    margin-left: 0.1cm;
                    border-bottom: 1px solid <?= $params['text_color'] ?>;
                ">
                <?= $params['pereadresovka'] ?>
            </div>
        </div>
        <div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 1.80cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                &nbsp;
            </div>
            <div
                style="
                    color: <?= $params['text_color'] ?>;
                    display: block;
                    float: left;
                    width: 17.695cm;
                    margin-left: 0.1cm;
                    text-align: center;
                    font-style: italic;
                    font-size: <?= $italic_size ?>;
                "
            >
                (новый пункт разгрузки, фамилия, инициалы, подпись лица, принявшего решение о переадресовке)
            </div>
        </div>
    </div>
    <!-- > > > > > > > > Переадресовка -->
</div>
