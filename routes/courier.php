<?php

use App\Http\Controllers\Seller\CourierOrderController;
use App\Http\Controllers\Webhooks\CarrybeeWebhookController;
use App\Http\Controllers\Webhooks\PaperflyWebhookController;
use App\Http\Controllers\Webhooks\PathaoWebhookController;
use App\Http\Controllers\Webhooks\RedxWebhookController;
use App\Http\Controllers\Webhooks\SteadfastWebhookController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    Route::post('/seller/orders/{order}/move-to-courier', [CourierOrderController::class, 'moveToCourier'])
        ->name('seller.orders.move-to-courier');
});

Route::post('/webhooks/steadfast', [SteadfastWebhookController::class, 'handle']);
Route::post('/webhooks/pathao', [PathaoWebhookController::class, 'handle']);
Route::post('/webhooks/redx', [RedxWebhookController::class, 'handle']);
Route::post('/webhooks/carrybee', [CarrybeeWebhookController::class, 'handle']);
Route::post('/webhooks/paperfly', [PaperflyWebhookController::class, 'handle']);
