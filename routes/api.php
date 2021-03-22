<?php

use App\Http\Controllers\Api\ActivityLogController;
use App\Http\Controllers\Api\OrdersController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\SuppliersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function() {
    Route::apiResources([
        'orders' => OrdersController::class,
        'products' => ProductsController::class,
        'suppliers' => SuppliersController::class,
        'activity-log' => ActivityLogController::class,
    ]);
});
