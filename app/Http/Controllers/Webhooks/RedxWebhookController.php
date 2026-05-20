<?php

namespace App\Http\Controllers\Webhooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RedxWebhookController extends Controller
{
    public function handle(Request $request)
    {
        Log::info('REDX webhook received', $request->all());

        // TODO: Verify webhook, find order, map status, update order.

        return response()->json([
            'success' => true,
            'message' => 'REDX webhook received.',
        ]);
    }
}
