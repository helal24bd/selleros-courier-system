<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\Couriers\CourierManager;
use Illuminate\Http\Request;

class CourierOrderController extends Controller
{
    public function moveToCourier(Request $request, Order $order, CourierManager $manager)
    {
        if ($order->store_id !== auth()->user()->store->id) {
            abort(403);
        }

        $result = $manager->createParcel($order);

        // TODO: Save courier response and tracking info to orders table.

        return back()->with('success', 'Order sent to courier successfully.');
    }
}
