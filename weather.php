<?php

$json = file_get_contents('php://input');
$requestData = json_decode($json, true);

$apiKey = "65c5144b7e59c9dce27bd64376159260";
$googleApiUrl = "api.openweathermap.org/data/2.5/weather?lat=".$requestData['latitude']."&lon=".$requestData['longitude']. "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
echo curl_exec($ch);


curl_close($ch);

