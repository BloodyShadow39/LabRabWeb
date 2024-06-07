<?php
$opts = array('http' =>
    array(
        'method'  => 'POST'
    )
);

$context  = stream_context_create($opts);

$result = file_get_contents('https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml', false, $context);
 $data = simplexml_load_string($result);
 $json = json_decode(json_encode($data));
 $massive = $json->Cube->Cube->Cube;
 for ($begin = 0;$begin<count($massive);$begin++){
        $currency = $massive[$begin]->{"@attributes"}->currency;
        $rate = $massive[$begin]->{"@attributes"}->rate;
        file_put_contents("$currency.txt", $rate);            
 }
 
