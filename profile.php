<?php


$access_token = 's80Es7+OflmR5Rrbkvd2pEzQ+9QDEkApU5uC99E2Vg5s8fx31yO+6wO4PG7e0kpKD+8FAw/kj1XYU6qfZKp4PBcOPxYt98ruyx3OL5FAc+rUFa2uK05rX7yb45P+D6esbX5DGLwQVe6IyDwJR1L4rgdB04t89/1O/w1cDnyilFU=';

$userId = 'U1e93bb52dfd52ca3515cb4edca921aa1';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

