<?php

namespace App\Http\Controllers;

use App\Services\ParkService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Using service classes to avoid handledin business rules on Controller
// It is a samples ou Strategy Design Patter usage - Dependency injection
class ParkController extends Controller
{
    public function parkingSpot(ParkService $parkService, Request $request, $id)
    {
        return $parkService->parkingSpotService($request, $id);
    }

    public function unParkingSpot(ParkService $parkService, Request $request, $id)
    {
        return $parkService->unParkingSpotService($request, $id);
    }

    public function parkingLot(ParkService $parkService, Request $request)
    {
        return $parkService->parkingLotService();
    }
}
