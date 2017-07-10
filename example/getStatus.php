<?php
    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/configuration.php';


    $request = new \mirolabs\ruch\client\Type\PackStatus();
    $request->setPackCode("3400014093352");


    $client = new mirolabs\ruch\client\Client(PARTNER_ID, PARTNER_KEY, 'test');
    $result = $client->getPackStatus($request);

    var_dump($result);

