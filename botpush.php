<?php



require "vendor/autoload.php";

$access_token = 's80Es7+OflmR5Rrbkvd2pEzQ+9QDEkApU5uC99E2Vg5s8fx31yO+6wO4PG7e0kpKD+8FAw/kj1XYU6qfZKp4PBcOPxYt98ruyx3OL5FAc+rUFa2uK05rX7yb45P+D6esbX5DGLwQVe6IyDwJR1L4rgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1ece6e120e4cc59ae01e8b684d3882c8';

$pushID = 'U1e93bb52dfd52ca3515cb4edca921aa1';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







