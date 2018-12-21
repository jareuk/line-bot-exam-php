<?php



require "vendor/autoload.php";

$access_token = require "token.php";

$channelSecret = '1ece6e120e4cc59ae01e8b684d3882c8';

$pushID = 'U1e93bb52dfd52ca3515cb4edca921aa1';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







