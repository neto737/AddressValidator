<?php
require 'vendor/autoload.php';

use neto737\AddressValidator\Validation;

$validator = Validation::make('LTC');
var_dump($validator->validate('ltc1q6xagsqvhu2c95a8lqvf09u73r5zwxqsk8nmz6j'));
