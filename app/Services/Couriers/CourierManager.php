<?php

namespace App\Services\Couriers;

use App\Models\Courier;
use InvalidArgumentException;

class CourierManager
{
    public function service(Courier $courier)
    {
        return match ($courier->slug) {
            'steadfast' => new SteadfastCourierService($courier),
            'pathao'    => new PathaoCourierService($courier),
            'redx'      => new RedxCourierService($courier),
            'carrybee'  => new CarrybeeCourierService($courier),
            'paperfly'  => new PaperflyCourierService($courier),
            default     => throw new InvalidArgumentException('Unsupported courier: ' . $courier->slug),
        };
    }

    public function createParcel($order): array
    {
        $courier = Courier::where('store_id', $order->store_id)
            ->where('is_active', true)
            ->where('status', true)
            ->firstOrFail();

        return $this->service($courier)->createParcel($order);
    }
}
