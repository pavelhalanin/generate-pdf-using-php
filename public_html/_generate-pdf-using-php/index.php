<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Форма генерации PDF</title>
    <link rel="stylesheet" href="/_generate-pdf-using-php/libs/bootstrap/node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>
<body>
    <div class="container pt-2">
        <h1 class="text-center text-primary">Форма создания накладной</h1>
        <form id="ph_form" method="post">
            <div class="input-group mb-2">
                <span class="input-group-text">Дата</span>
                <input
                    class="form-control"
                    type="date"
                    id="ph_date_input"
                    name="ttn_date"
                    value="2024-02-13"
                    style="max-width: 200px;"
                />
                <input
                    class="form-control"
                    type="text"
                    id="ph_date_string_input"
                    name="ttn_date_string"
                    value=""
                />
            </div>

            <div class="input-group mb-2">
                <span class="input-group-text">Грузоотправитель</span>
                <input
                    class="form-control"
                    type="number"
                    name="unp_gruzootpravitel"
                    value="123456789"
                    placeholder="Грузоотправитель"
                    min="100000000"
                    max="999999999"
                />
                <span class="input-group-text">Грузополучатель</span>
                <input
                    class="form-control"
                    type="number"
                    name="unp_gruzopoluchatel"
                    value="987654321"
                    placeholder="Грузополучатель"
                    min="100000000"
                    max="999999999"
                />
                <span class="input-group-text">Заказчик автомобильной перевозки (плательщик)</span>
                <input
                    class="form-control"
                    type="number"
                    name="unp_zakazchik_auto"
                    value="123456789"
                    placeholder="Заказчик автомобильной перевозки (плательщик)"
                    min="100000000"
                    max="999999999"
                />
            </div>

            <div class="input-group mb-2">
                <span class="input-group-text">Автомобиль</span>
                <input
                    class="form-control"
                    type="text"
                    name="automobil"
                    value="ГАЗ 1234"
                    placeholder="Автомобиль"
                />
                <span class="input-group-text">Прицеп</span>
                <input
                    class="form-control"
                    type="text"
                    name="pricep"
                    value=""
                    placeholder="Прицеп"
                />
            </div>

            <div class="input-group mb-2">
                <span class="input-group-text">К путевому листу</span>
                <input
                    class="form-control"
                    type="text"
                    name="k_putevomy_listy"
                    value="1234 от 01.01.2025"
                    placeholder="К путевому листу"
                />
            </div>

            <div class="input-group mb-2">
                <span class="input-group-text">Водитель</span>
                <input
                    class="form-control"
                    type="text"
                    name="voditel"
                    value="Иванов Иван Иванович"
                    placeholder="Водитель"
                />
            </div>

            <div class="d-flex mb-2">
                <span class="input-group-text">Заказчик автомобильной<br/>перевозки (плательщик)</span>
                <div class="d-flex flex-column w-100">
                    <input
                        class="form-control"
                        type="text"
                        name="name_1_zakazchik"
                        value="ИП Иванов Иван Иванович"
                        placeholder="Заказчик автомобильной перевозки (плательщик)"
                    />
                    <input
                        class="form-control"
                        type="text"
                        name="name_2_zakazchik"
                        value="г. Город, ул. Улица, 1"
                        placeholder="Заказчик автомобильной перевозки (плательщик)"
                    />
                </div>
            </div>

            <div class="input-group mb-2">
                <span class="input-group-text">Грузоотправитель</span>
                <input
                    class="form-control"
                    type="text"
                    name="name_gruzootpravitel"
                    value="Петров Петр Петрович, г. Город, ул. Улица, 2"
                    placeholder="Грузоотправитель"
                />
            </div>

            <div class="input-group mb-2">
                <span class="input-group-text">Грузополучатель</span>
                <input
                    class="form-control"
                    type="text"
                    name="name_gruzopoluchatel"
                    value="Николаев Николай Николаевич, г. Город, ул. Улица, 3"
                    placeholder="Грузополучатель"
                />
            </div>

            <div class="input-group mb-2">
                <span class="input-group-text">Основание отпуска</span>
                <input
                    class="form-control"
                    type="text"
                    name="osnovanie_otpuska"
                    value="договор № 1 от 19.07.2025"
                    placeholder="Основание отпуска"
                />
            </div>

            <div class="input-group mb-2">
                <span class="input-group-text">Переадресовка</span>
                <input
                    class="form-control"
                    type="text"
                    name="pereadresovka"
                    value=""
                    placeholder="Переадресовка"
                />
            </div>

            <div class="input-group mb-2">
                <span class="input-group-text">Шаблон</span>
                <select class="form-select" id="ph_template_select">
                    <option value="/_generate-pdf-using-php/api/v1/generator-pdf/not-use-template-pdf">ТТН пустая</option>
                    <option value="/_generate-pdf-using-php/api/v1/generator-pdf/use-template-pdf">ТТН поверх ТТН OZON</option>
                </select>
                <span class="input-group-text">Цвет текста</span>
                <select class="form-select" name="text_color">
                    <option value="red">красный</option>
                    <option value="black">черный</option>
                </select>
                <button class="btn btn-primary" name="submit">Сгенерировать PDF</button>
            </div>
        </form>
    </div>
    <script src="/_generate-pdf-using-php/js/TtnHelper.js"></script>
    <script>
        TtnHelper.listenChangeTemplate();
        TtnHelper.listenChangeDate();
    </script>
</body>
</html>
