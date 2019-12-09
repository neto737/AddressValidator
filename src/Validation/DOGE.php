<?php

namespace neto737\AddressValidator\Validation;

use neto737\AddressValidator\Validation;

class DOGE extends Validation {

    protected $base58PrefixToHexVersion = [
        'D' => '1E',
    ];

}
