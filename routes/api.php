<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaxpayerController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('taypayers', TaxpayerController::class);
Route::get('/taxpayers', [TaxpayerController::class, 'index']);
Route::post('/taxpayers', [TaxpayerController::class, 'store']);
Route::get('/taxpayers/{taxpayer}', [TaxpayerController::class, 'show']);
Route::put('/taxpayers/{taxpayer}', [TaxpayerController::class, 'update']);
Route::delete('/taxpayers/{taxpayer}', [TaxpayerController::class, 'destroy']);
