<?php

namespace ccxt;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use Exception; // a common import

class vbtc extends foxbit {

    public function describe() {
        return $this->deep_extend(parent::describe (), array(
            'id' => 'vbtc',
            'name' => 'VBTC',
            'countries' => array( 'VN' ),
            'has' => array(
                'CORS' => false,
            ),
            'urls' => array(
                'logo' => 'https://user-images.githubusercontent.com/1294454/27991481-1f53d1d8-6481-11e7-884e-21d17e7939db.jpg',
                'api' => array(
                    'public' => 'https://api.blinktrade.com/api',
                    'private' => 'https://api.blinktrade.com/tapi',
                ),
                'www' => 'https://vbtc.exchange',
                'doc' => 'https://blinktrade.com/docs',
            ),
            'options' => array(
                'brokerId' => '3', // https://blinktrade.com/docs/#brokers
            ),
        ));
    }
}
