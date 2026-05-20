<?php

namespace App\Services\Couriers;

use App\Models\Courier;
use App\Services\Couriers\Contracts\CourierInterface;

class CarrybeeCourierService implements CourierInterface
{
    public function __construct(private Courier $courier)
    {
    }

    public function createParcel($order): array
    {
        return [
            'success' => false,
            'courier' => 'carrybee',
            'message' => 'CarryBee create parcel method is ready for implementation.',
        ];
    }

    public function trackParcel(string $trackingId): array
    {
        return [
            'success' => false,
            'courier' => 'carrybee',
            'tracking_id' => $trackingId,
            'message' => 'CarryBee tracking method is ready for implementation.',
        ];
    }

    public function cancelParcel(string $trackingId): array
    {
        return [
            'success' => false,
            'courier' => 'carrybee',
            'tracking_id' => $trackingId,
            'message' => 'CarryBee cancel method is ready for implementation.',
        ];
    }
}
