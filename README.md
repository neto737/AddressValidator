# php-cryptocurrency-address-validation

Easy to use PHP Bitcoin and Litecoin address validator.
One day I will add other crypto currencies. Or how about you? :)

## Usage


```php
use neto737\AddressValidator\Validation;

$validator = Validation::make('BTC');
var_dump($validator->validate('1QLbGuc3WGKKKpLs4pBp9H6jiQ2MgPkXRp'));

```
