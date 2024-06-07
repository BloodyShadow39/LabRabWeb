<?php
$Amount = 2;
if(isset($_GET["Amount"])){
    $Amount=$_GET["Amount"];
}
if($Amount<=0){
    echo "Колличество валюты не может быть отрицательной, либо равна нулю";
    exit;
};
$To="";
if(isset($_GET["To"])){
    $To = $_GET["To"];
}
if (file_exists("$To.txt")) {
} elseif($To!="EUR") {
    echo "Переводимой валюты $To не существует";
    exit;
}
$From = 'EUR';
    if(isset($_GET["From"])){
        $From=$_GET["From"];
    }
    if (file_exists("$From.txt")) {
    } elseif($From!="EUR") {
        echo "Заданной валюты $From не существует";
        exit;
    }
if($To!="EUR"){
    if($From!="EUR"){
        $X=($Amount/file_get_contents("$From.txt"));
        $AnotherRate = $X*file_get_contents("$To.txt");
        echo $AnotherRate;
        exit;
    }
    $AnotherRate = $Amount*file_get_contents("$To.txt");
    echo $AnotherRate;
    exit;
}
else{
    if($From==$To){
     $X=$Amount;
     echo $X;
     exit;   
    }
    $X=($Amount/file_get_contents("$From.txt"));
    echo $X;
    exit;
};