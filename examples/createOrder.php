<?php

require_once '../vendor/autoload.php';

use Payriff\Payriff;


$payriff = new Payriff();

$payriff->setEncryptionToken(time() . rand());
$payriff->setMerchantNo('merchant');
$payriff->setSecretKey('secret');

$createOrder = $payriff->createOrder(amount: 1, description: 'Test order');

var_dump($createOrder);