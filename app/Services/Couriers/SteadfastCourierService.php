<?php

namespace App\Services\Couriers;

use App\Models\Courier;
use App\Services\Couriers\Contracts\CourierInterface;

class SteadfastCourierService implements CourierInterface
{
    public function __construct(private Courier $courier)
    {
    }

    public function createParcel($order): array
    {
        return [
            'success' => false,
            'courier' => 'steadfast',
            'message' => 'Steadfast create parcel method is ready for implementation.',
        ];
    }

    public function trackParcel(string $trackingId): array
    {
        return [
            'success' => false,
            'courier' => 'steadfast',
            'tracking_id' => $trackingId,
            'message' => 'Steadfast tracking method is ready for implementation.',
        ];
    }

    public function cancelParcel(string $trackingId): array
    {
        return [
            'success' => false,
            'courier' => 'steadfast',
            'tracking_id' => $trackingId,
            'message' => 'Steadfast cancel method is ready for implementation.',
        ];
    }
}
