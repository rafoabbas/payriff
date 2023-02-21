# Payriff payment gateway package for php

### Create new order
    
```php
use Payriff\Payriff;

$payriff = new Payriff();

$payriff->setEncryptionToken(time() . rand());
$payriff->setMerchantNo('merchant');
$payriff->setSecretKey('secret');

$createOrder = $payriff->createOrder(amount: 1, description: 'Test order');
```

## License

The package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).