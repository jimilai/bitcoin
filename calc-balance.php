<?php
require('../vendor/autoload.php');

use BtcTool\Client;

$client = new Client('http://user:123456@127.0.0.1:18443');

$balance = $client->exec('getbalance')->result;
echo 'wallet balance => ' . $balance . PHP_EOL;

$utxos = $client->exec('listunspent')->result;
$total = 0;
foreach($utxos as $utxo){
  $total += $utxo->amount;
}
echo 'utxo sum => '. $total . PHP_EOL;
