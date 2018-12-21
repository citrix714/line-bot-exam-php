<?php



require "vendor/autoload.php";

$access_token = 'xlwEv/+O1R2CN9unALEq7jfJZFLimRWdPFJ8bwMW+obDVRvBJxg8NTYf0apVcuNJ9l9HCs3POLCDFaMtZ0Bf90spftkHiP3E/vMJJ37FxdU8Xc4ej+Y6/6FQ5F+QEFPvQ3lFYy6ELVJ/Gt0PlJvWBgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







