<?php

namespace neto737\AddressValidator\Validation;

use neto737\AddressValidator\Validation;

class ZEC extends Validation {

    // more info at https://en.bitcoin.it/wiki/List_of_address_prefixes
    protected $base58PrefixToHexVersion = [
        't' => '1C',
//        'z' => '16',
    ];
    protected $lengths = [
        't' => 52,
        'z' => 140
    ];

}
