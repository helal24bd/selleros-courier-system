<?php

namespace App\Services\Couriers;

use App\Models\Courier;
use App\Services\Couriers\Contracts\CourierInterface;

class RedxCourierService implements CourierInterface
{
    public function __construct(private Courier $courier)
    {
    }

    public function createParcel($order): array
    {
        return [
            'success' => false,
            'courier' => 'redx',
            'message' => 'REDX create parcel method is ready for implementation.',
        ];
    }

    public function trackParcel(string $trackingId): array
    {
        return [
            'success' => false,
            'courier' => 'redx',
            'tracking_id' => $trackingId,
            'message' => 'REDX tracking method is ready for implementation.',
        ];
    }

    public function cancelParcel(string $trackingId): array
    {
        return [
            'success' => false,
            'courier' => 'redx',
            'tracking_id' => $trackingId,
            'message' => 'REDX cancel method is ready for implementation.',
        ];
    }
}
