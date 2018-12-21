<?php
$access_token = require "token.php";


$url = 'https://api.line.me/oauth2/v2.1/verify?access_token=YLVX2uCKEBTDlC0QCxzxQ+Vzvm9TVp+c39bma1zD1bBrq9QbbbdgG+7evU0Rm+mcD+8FAw/kj1XYU6qfZKp4PBcOPxYt98ruyx3OL5FAc+p2ksXcLG7t+nvb198Nyt553XwP/H9s1O2rRY5j7pXABQdB04t89/1O/w1cDnyilFU=';

//$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
