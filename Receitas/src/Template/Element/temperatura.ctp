<?php 
//https://openweathermap.org/api

$myApiKey = "c3c022d3ba42eaf2c4446b8fdba2e2d9"; //chave API 
$url = "http://api.openweathermap.org/data/2.5/weather?q=".$cidade."&appid=".$myApiKey."&units=metric";

//leitura do pedido de API
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
$response = curl_exec($ch); 
curl_close($ch);

$data = json_decode($response);  //json é guardado dentro de uma variavel

echo 'Temperatura em '.$cidade.' → '.$data->main->temp.'ºC';?>