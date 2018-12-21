<?php
$access_token = 'xlwEv/+O1R2CN9unALEq7jfJZFLimRWdPFJ8bwMW+obDVRvBJxg8NTYf0apVcuNJ9l9HCs3POLCDFaMtZ0Bf90spftkHiP3E/vMJJ37FxdU8Xc4ej+Y6/6FQ5F+QEFPvQ3lFYy6ELVJ/Gt0PlJvWBgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
