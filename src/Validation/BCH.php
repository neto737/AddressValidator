<?php

namespace neto737\AddressValidator\Validation;

use neto737\AddressValidator\Validation;
use neto737\AddressValidator\Utils\CashAddress;

class BCH extends Validation {

    // more info at https://en.bitcoin.it/wiki/List_of_address_prefixes
    protected $base58PrefixToHexVersion = [
        '1' => '00',
        '3' => '05'
    ];

    public function validate($address) {
        try {
            $legacy = CashAddress::new2old($address);
        } catch (\Exception $ex) {
            $legacy = $address;
        }
        return parent::validate($legacy);
    }

}
