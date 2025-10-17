<?php

namespace App\Http\Controllers;

use App\Services\VehicleService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function createVehicle(TransactionService $transactionService, Request $request)
    {
        return $transactionService->createTransactionService($request);
    }
}
