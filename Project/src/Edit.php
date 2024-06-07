<?php
if(isset($_GET["currency"])){
    $currency = $_GET["currency"];
}   else {
    echo "Ошибка! Введите название валюты.";
    exit;
}
if ($currency=="") {
    echo "Ошибка! Введите название валюты.";
    exit;
}

if (file_exists("$currency.txt")) {
} else {
    echo "Такая валюта $currency не существует";
    exit;
}

if(isset($_GET["rate"])){
    $rate = $_GET["rate"]; 
    if($rate<=0){
        echo "Нельзя ввести отрицательное число";
        exit;
    }
} 
else {
    echo "Ошибка! Введите ценность валюты.";
    exit;
}

if ($rate=="") {
    echo "Ошибка! Введите ценность валюты.";
    exit;
}

file_put_contents("$currency.txt", $rate); 
echo "Хочу изменить валюту $currency на значение $rate";

