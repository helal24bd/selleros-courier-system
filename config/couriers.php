<?php

return [
    'supported' => ['steadfast', 'pathao', 'redx', 'carrybee', 'paperfly'],

    'status_map' => [
        'pending' => 'pending',
        'picked' => 'picked',
        'in_transit' => 'in_transit',
        'out_for_delivery' => 'out_for_delivery',
        'delivered' => 'delivered',
        'partial_delivery' => 'partial_delivery',
        'returned' => 'returned',
        'cancelled' => 'cancelled',
        'failed' => 'failed',
        'hold' => 'hold',
        'unknown' => 'unknown',
    ],
];
