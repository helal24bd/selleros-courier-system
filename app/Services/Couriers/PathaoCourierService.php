<?php

namespace App\Services\Couriers;

use App\Models\Courier;
use App\Services\Couriers\Contracts\CourierInterface;

class PathaoCourierService implements CourierInterface
{
    public function __construct(private Courier $courier)
    {
    }

    public function createParcel($order): array
    {
        return [
            'success' => false,
            'courier' => 'pathao',
            'message' => 'Pathao create parcel method is ready for implementation.',
        ];
    }

    public function trackParcel(string $trackingId): array
    {
        return [
            'success' => false,
            'courier' => 'pathao',
            'tracking_id' => $trackingId,
            'message' => 'Pathao tracking method is ready for implementation.',
        ];
    }

    public function cancelParcel(string $trackingId): array
    {
        return [
            'success' => false,
            'courier' => 'pathao',
            'tracking_id' => $trackingId,
            'message' => 'Pathao cancel method is ready for implementation.',
        ];
    }
}
