<?php

namespace App\Services\Couriers\Contracts;

interface CourierInterface
{
    public function createParcel($order): array;
    public function trackParcel(string $trackingId): array;
    public function cancelParcel(string $trackingId): array;
}
