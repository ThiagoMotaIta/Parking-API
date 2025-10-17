<?php

namespace App\Http\Controllers;

use App\Services\ParkService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Using service classes to avoid handledin business rules on Controller
// It is a samples ou Strategy Design Patter usage - Dependency injection
class ParkController extends Controller
{
    public function parkinSpot(ParkService $parkService, Request $request, $id)
    {
        return $parkService->parkinSpotService($request, $id);
    }

    public function unParkinSpot(ParkService $parkService, Request $request, $id)
    {
        return $parkService->unParkinSpotService($request, $id);
    }

    public function parkinLot(ParkService $parkService, Request $request)
    {
        return $parkService->parkinLotService();
    }
}
