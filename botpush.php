<?php



require "vendor/autoload.php";

$access_token = 'xlwEv/+O1R2CN9unALEq7jfJZFLimRWdPFJ8bwMW+obDVRvBJxg8NTYf0apVcuNJ9l9HCs3POLCDFaMtZ0Bf90spftkHiP3E/vMJJ37FxdU8Xc4ej+Y6/6FQ5F+QEFPvQ3lFYy6ELVJ/Gt0PlJvWBgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f2eab052130004c54e58f684db5f9083';

$pushID = 'U22f1e113c6239968c5d0950b16fa0f9c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







