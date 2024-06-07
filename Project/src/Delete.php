<?php
$currency = [];
if(isset($_GET["currency"])){
  
    $currency = $_GET["currency"];
}
echo "Данная валюта " . count($currency) . " была удалена";
foreach($currency as $currenc) {echo "$currenc<br>";
unlink("$currenc.txt");}
?>
