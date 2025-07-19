class TtnHelper {
    static listenChangeTemplate() {
        const FORM = document.getElementById('ph_form');
        const SELECT = document.getElementById('ph_template_select');

        FORM.action = SELECT.value;

        SELECT.addEventListener("change", function () {
            FORM.action = this.value;
        });
    }

    static listenChangeDate() {
        const INPUT_DATE = document.getElementById('ph_date_input');
        const INPUT_STRING_DATE = document.getElementById('ph_date_string_input');

        INPUT_STRING_DATE.value = TtnHelper.getStringDate_byIsoDate(INPUT_DATE.value);

        INPUT_DATE.addEventListener("change", function () {
            INPUT_STRING_DATE.value = TtnHelper.getStringDate_byIsoDate(this.value);
        });
    }

    static getStringDate_byIsoDate(isoDate) {
        const D = new Date(isoDate);

        if (D == 'Invalid Date') {
            return '';
        }

        const DD = `${D.getDate()}`.padStart(2, '0');
        const MM = `${D.getMonth() + 1}`.padStart(2, '0');
        const YYYY = D.getFullYear();
        
        const DICT_MONTH = {
            '01': 'января',
            '02': 'февраля',
            '03': 'марта',
            '04': 'апреля',
            '05': 'мая',
            '06': 'июня',
            '07': 'июля',
            '08': 'августа',
            '09': 'сентября',
            '10': 'октября',
            '11': 'ноября',
            '12': 'декабря',
        };

        const STRING_MONTH = DICT_MONTH[MM];

        return `${DD} ${STRING_MONTH} ${YYYY} г.`;
    }
}