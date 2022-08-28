<?php


$ch = curl_init("https://www.google.com/finance/quote/INTC:BCBA?hl=en");
$fp = fopen("example_homepage.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

$data = curl_exec($ch);
if(curl_error($ch)) {
    fwrite($fp, curl_error($ch));
}
curl_close($ch);
fclose($fp);

var_dump($data);