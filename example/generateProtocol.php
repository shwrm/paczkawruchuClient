<?php
    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/configuration.php';


    $request = new \mirolabs\ruch\client\Type\Protocol();
    $request->setParcels(["3400014093352"]);


    $client = new mirolabs\ruch\client\Client(PARTNER_ID, PARTNER_KEY, 'test');
    $result = $client->generateProtocol($request);

    $file ='/tmp/protocol.pdf';
    file_put_contents($file, $result->getFileData());

    echo sprintf("Save PDF in %s\n", $file);

