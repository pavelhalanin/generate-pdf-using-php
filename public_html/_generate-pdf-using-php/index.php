<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Форма генерации PDF</title>
</head>
<body>
    <select id="ph_select">
        <option value="/_generate-pdf-using-php/api/v1/generator-pdf/use-template-pdf">ТТН поверх ТТН OZON</option>
        <option value="/_generate-pdf-using-php/api/v1/generator-pdf/not-use-template-pdf">ТТН пустая</option>
    </select>

    <form id="ph_form" action="/_generate-pdf-using-php/api/v1/generator-pdf/use-template-pdf" method="post">
        <p>
            <input type="date" name="ttn_date" value="2024-02-13" />
        </p>
        <p>
            <input type="number" name="unp_gruzootpravitel" value="123456789" placeholder="Грузоотправитель" />
            <input type="number" name="unp_gruzopoluchatel" value="987654321" placeholder="Грузополучатель" />
            <input type="number" name="unp_zakazchik_auto" value="123456789" placeholder="Заказчик автомобильной перевозки (плательщик)" />
        </p>
        <p>
            <input type="text" name="automobil" value="Фольксваген" placeholder="Автомобиль" />
            <input type="text" name="pricep" value="" placeholder="Прицеп" />
        </p>
        <button name="submit">Сгенерировать PDF</button>
    </form>

    <script>
        const FORM = document.getElementById('ph_form');
        const SELECT = document.getElementById('ph_select');

        SELECT.addEventListener("change", function () {
            FORM.action = this.value;
        });
    </script>
</body>
</html>
