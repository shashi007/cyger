<?php

require 'vendor/autoload.php';

use Cyger\Client;

$client = new Client();
$result = $client->setExchange('Binance')->setPair('BTC_ETH')->getLastPrice();
echo $result['Binance']['BTC_ETH'];  
echo "<br>";
$result = $client->setExchange('Binance')->setPair('BTC_WAVES')->getLastPrice();
echo $result['Binance']['BTC_WAVES']; 
echo "<br>";
$result = $client->setExchange('Binance')->setPair('BTC_KMD')->getLastPrice();
echo $result['Binance']['BTC_KMD']; 
echo "<br>";
$result = $client->setExchange('Binance')->setPair('BTC_AION')->getLastPrice();
echo $result['Binance']['BTC_AION']; 
echo "<br>";
$result = $client->setExchange('Binance')->setPair('BTC_QSP')->getLastPrice();
echo $result['Binance']['BTC_QSP']; 
echo "<br>";
$result = $client->setExchange('Binance')->setPair('BTC_REQ')->getLastPrice();
echo $result['Binance']['BTC_REQ']; 
echo "<br>";
$result = $client->setExchange('Binance')->setPair('BTC_SNM')->getLastPrice();
echo $result['Binance']['BTC_SNM']; 
echo "<br>";
$result = $client->setExchange('Binance')->setPair('BTC_USD')->getLastPrice();
echo $result['Binance']['BTC_USD']; 

?>
