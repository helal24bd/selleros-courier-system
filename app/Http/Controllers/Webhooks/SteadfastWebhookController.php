<?php

namespace App\Http\Controllers\Webhooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SteadfastWebhookController extends Controller
{
    public function handle(Request $request)
    {
        Log::info('Steadfast webhook received', $request->all());

        // TODO: Verify webhook, find order, map status, update order.

        return response()->json([
            'success' => true,
            'message' => 'Steadfast webhook received.',
        ]);
    }
}
