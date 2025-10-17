<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ParkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// List Lot
Route::get('parking-lot', [ParkController::class, 'parkingLot']);

// Parking
Route::post('parking-spot/{id}/park', [ParkController::class, 'parkingSpot']);

// Unparking
Route::post('parking-spot/{id}/unpark', [ParkController::class, 'unParkingSpot']);
