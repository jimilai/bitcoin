<?php
require('../vendor/autoload.php');

use GuzzleHttp\Client;

$client = new Client();

$opts = [
  'json' => [
    'jsonrpc' => '1.0',
    'method' => 'getnetworkinfo',
    'params' => [],
    'id' => time()
  ]
];

$rsp = $client->post('http://user:123456@localhost:18443',$opts);
echo $rsp->getBody() . PHP_EOL;
