<?php

namespace neto737\AddressValidator\Validation;

use neto737\AddressValidator\Utils\Bech32Decoder;
use neto737\AddressValidator\Utils\Bech32Exception;
use neto737\AddressValidator\Validation;

class BTC_TESTNET extends Validation {

    // more info at https://en.bitcoin.it/wiki/List_of_address_prefixes
    protected $base58PrefixToHexVersion = [
        'm' => '6F',
        'n' => '6F',
        '2' => 'C4'
    ];

    public function validate($address) {
        $valid = parent::validate($address);

        if (!$valid) {
            // maybe it's a bech32 address
            try {
                $valid = is_array($decoded = Bech32Decoder::decodeRaw($address)) && 'tb' === $decoded[0];
            } catch (Bech32Exception $exception) {
                
            }
        }

        return $valid;
    }

}
