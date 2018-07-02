<?php

require 'vendor/autoload.php';

use Cyger\Client;

$client = new Client();
$result = $client->setExchange('Poloniex')->setPair('BTC_ETH')->getLastPrice();
echo $result['Poloniex']['BTC_ETH'];    // 0.04549105

?>
