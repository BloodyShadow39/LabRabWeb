<html>
    <head>
        <title> Калькулятор </title>
    </head>
    <body>
        <h1> Калькулятор </h1>
        <form action="Exchange.php" method="GET"> 
            <label>
                <span>Из валюты</span>
                <select name="From">
                    <option value="AUD">Австралийский Доллар</option>
                    <option value="BGN">Болгарский Лев</option>
                    <option value="BRL">Бразильский Реал</option>
                    <option value="CAD">Канадский Доллар</option>
                    <option value="CHF">Швейцарский Франк</option>
                    <option value="CNY">Китайский Юань</option>
                    <option value="CZK">Чешская Крона</option>
                    <option value="DKK">Датская Крона </option>
                    <option value="GBP">Фунт Стерлингов</option>
                    <option value="HKD">Гонконгский доллар</option>
                    <option value="HUF">Венгерский Форин</option>
                    <option value="IDR">Индонезийская Рупия</option>
                    <option value="ILS">Новый Израильский Шекель</option>
                    <option value="INR">Индийская Рупия</option>
                    <option value="ISK">Исландская Крона</option>
                    <option value="KRW">Южнокорейская Вона</option>
                    <option value="MXN">Мексиканское Песо</option>
                    <option value="MYR">Малайзийский Ринггит</option>
                    <option value="NOK">Норвежская Крона</option>
                    <option value="NZD">Новозеландский Доллар</option>
                    <option value="PHP">Филиппинское Песо</option>
                    <option value="PLN">Польский Злотый</option>
                    <option value="RON">Румынский Лей</option>
                    <option value="SEK">Шведская Крона </option>
                    <option value="SGD">Сингапурский Доллар</option>
                    <option value="THB">Таиландский Бат</option>
                    <option value="TRY">Турецкая Лира</option>
                    <option value="ZAR">Южноафриканский Рэнд</option>
                    <option value="EUR">Евро</option>
                    <option value="JPY">Японская Йена</option>
                    <option value="USD">Доллар США</option>
                </select> 
            </label> 
            <label>Количество<input name="Amount" type="number"/></label>
            <br/>
            <label>
                <span>В валюту</span> 
                <select name="To">
                    <option value="AUD">Австралийский Доллар</option>
                    <option value="BGN">Болгарский Лев</option>
                    <option value="BRL">Бразильский Реал</option>
                    <option value="CAD">Канадский Доллар</option>
                    <option value="CHF">Швейцарский Франк</option>
                    <option value="CNY">Китайский Юань</option>
                    <option value="CZK">Чешская Крона</option>
                    <option value="DKK">Датская Крона </option>
                    <option value="GBP">Фунт Стерлингов</option>
                    <option value="HKD">Гонконгский доллар</option>
                    <option value="HUF">Венгерский Форин</option>
                    <option value="IDR">Индонезийская Рупия</option>
                    <option value="ILS">Новый Израильский Шекель</option>
                    <option value="INR">Индийская Рупия</option>
                    <option value="ISK">Исландская Крона</option>
                    <option value="KRW">Южнокорейская Вона</option>
                    <option value="MXN">Мексиканское Песо</option>
                    <option value="MYR">Малайзийский Ринггит</option>
                    <option value="NOK">Норвежская Крона</option>
                    <option value="NZD">Новозеландский Доллар</option>
                    <option value="PHP">Филиппинское Песо</option>
                    <option value="PLN">Польский Злотый</option>
                    <option value="RON">Румынский Лей</option>
                    <option value="SEK">Шведская Крона </option>
                    <option value="SGD">Сингапурский Доллар</option>
                    <option value="THB">Таиландский Бат</option>
                    <option value="TRY">Турецкая Лира</option>
                    <option value="ZAR">Южноафриканский Рэнд</option>
                    <option value="EUR">Евро</option>
                    <option value="JPY">Японская Йена</option>
                    <option value="USD">Доллар США</option>
                </select> 
            </label>
            <br/>
            <button>Конвектировать</button>
        </form>
    </body>
</html>