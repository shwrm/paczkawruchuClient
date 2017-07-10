<?php
    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/configuration.php';


    $businessPack = new \mirolabs\ruch\client\Type\BusinessPack();
    $businessPack->setDestinationCode('WS-999201-26-14');
    $businessPack->setPhoneNumber('123222321');
    $businessPack->setFirstName('Jan');
    $businessPack->setLastName('Kowalski');
    $businessPack->setSenderEMail('test@tt.pl');
    $businessPack->setSenderCompanyName("Company Sp.zo.o.");
    $businessPack->setSenderStreetName("Main");
    $businessPack->setSenderBuildingNumber("1");
    $businessPack->setSenderCity("Big City");
    $businessPack->setSenderPostCode("11-111");
    $businessPack->setSenderPhoneNumber("111222333");
    $businessPack->setPrintAdress("1");

    $client = new mirolabs\ruch\client\Client(PARTNER_ID, PARTNER_KEY, 'test');
    $result = $client->generateBusinessPack($businessPack);

    var_dump($result);

