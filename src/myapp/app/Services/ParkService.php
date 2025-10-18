<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Park;
use App\Enums\ParkEnum;
use App\Models\Vehicle;
use App\Enums\VehicleEnum;

class ParkService {

    // Park a Vehicle
	public function parkingSpotService(Request $request, $id) {
        try {

            // Verify if vehicle is registered
            $vehicle = Vehicle::where('id', $id)->get();

            // If there is no vehicle yet, register it
            if ($vehicle->count() == 0){

                $createVehicle = new Vehicle;
                $createVehicle->plate = $request->vehicle_plate;
                $createVehicle->color = $request->vehicle_color;
                $createVehicle->brand = $request->vehicle_brand;
                // Checking the type of vehicle (Enum)
                if ($request->vehicle_type == "motorcycle"){
                    $vehicleType = VehicleEnum::Motorcycle;
                }
                if ($request->vehicle_type == "car"){
                    $vehicleType = VehicleEnum::Car;
                }
                if ($request->vehicle_type == "van"){
                    $vehicleType = VehicleEnum::Van;
                }
                $createVehicle->v_type = $vehicleType;
                $createVehicle->save();

                // Now, once vehicle is registered, system can find it in database
                $vehicle = Vehicle::where('plate', $request->vehicle_plate)->get();
            }

            // List all free slots for parking
            $park = Park::where('status', 'free')->get();

            if ($request->vehicle_type == "motorcycle"){
                $createPark = new Park;
                $createPark->vehicle_id = $vehicle[0]->id;
                $createPark->lot = 'B15';
                $createPark->status = ParkEnum::Occupied;
                $createPark->save();
            }
            if ($request->vehicle_type == "car"){
                $createPark = new Park;
                $createPark->vehicle_id = $vehicle[0]->id;
                $createPark->lot = 'B10';
                $createPark->status = ParkEnum::Occupied;
                $createPark->save();
            }

            if ($request->vehicle_type == "van"){
                // For vans, system needs to allocate 3 slots, so 3 registers
                // No loop now due to the assessment, we got only 3 slots for vans (C3, C4 and C5)
                $createPark = new Park;
                $createPark->vehicle_id = $vehicle[0]->id;
                $createPark->lot = 'C3';
                $createPark->status = ParkEnum::Occupied;
                $createPark->save();

                $createPark = new Park;
                $createPark->vehicle_id = $vehicle[0]->id;
                $createPark->lot = 'C4';
                $createPark->status = ParkEnum::Occupied;
                $createPark->save();

                $createPark = new Park;
                $createPark->vehicle_id = $vehicle[0]->id;
                $createPark->lot = 'C5';
                $createPark->status = ParkEnum::Occupied;
                $createPark->save();
            }

            return response()->json([
                "message" => "Vehicle Parked!"
            ], 202);
        } catch (Exception $e){
            return response()->json([
              'error' => $e->getMessage()
            ], 405);
        }

	}


     // Unpark a Vehicle
	public function unParkingSpotService(Request $request, $id) {
        try {

            // As the table parks has N registers from N vehicles, system can just set all specific vehicle occupied slots FREE when such vehicle unparks
            $unpark = Park::where('vehicle_id', '=', $id)->where('status', '=', ParkEnum::Occupied)->update(['status' => ParkEnum::Free]);

            return response()->json([
                "message" => "Vehicle Unparked!"
            ], 202);

        } catch (Exception $e){
            return response()->json([
              'error' => $e->getMessage()
            ], 405);
        }

	}


    // List all Slots
    public function parkingLotService(){
        try {

            // List all slots of parking with it last status (free or occupied) and last vehicle parked
            $park = Park::distinct('lot')->get();

            return response()->json([
                "parkingList" => $park
            ], 202);

        } catch (Exception $e){
            return response()->json([
              'error' => $e->getMessage()
            ], 405);
        }
    }

}
