<?php

namespace App\Services\Couriers;

use App\Models\Courier;
use App\Services\Couriers\Contracts\CourierInterface;

class PaperflyCourierService implements CourierInterface
{
    public function __construct(private Courier $courier)
    {
    }

    public function createParcel($order): array
    {
        return [
            'success' => false,
            'courier' => 'paperfly',
            'message' => 'Paperfly create parcel method is ready for implementation.',
        ];
    }

    public function trackParcel(string $trackingId): array
    {
        return [
            'success' => false,
            'courier' => 'paperfly',
            'tracking_id' => $trackingId,
            'message' => 'Paperfly tracking method is ready for implementation.',
        ];
    }

    public function cancelParcel(string $trackingId): array
    {
        return [
            'success' => false,
            'courier' => 'paperfly',
            'tracking_id' => $trackingId,
            'message' => 'Paperfly cancel method is ready for implementation.',
        ];
    }
}
