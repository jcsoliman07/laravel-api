<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\InvoiceController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function()
// {
//     return response()->json([
//         'messages'  =>  'Hello form API!',
//     ], 200);
// });

Route::group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers\Api'], function(){
    Route::apiResource('customer', CustomerController::class);
    Route::apiResource('invoice', InvoiceController::class);
});