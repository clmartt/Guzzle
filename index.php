<?php

require __DIR__."/vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET','http://dummy.restapiexample.com/api/v1/employee/1');
$body = json_decode($response->getBody(),true) ;

foreach ($body['data'] as  $value) {
    echo $value."<br>";
}

