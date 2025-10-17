<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use App\Models\Park;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Vehicle::create([
            'v_type' => 'car',
            'plate' => 'PNZ-0E96',
            'color' => 'gray',
            'brand' => 'GM-Chevrolet',
        ]);
        Vehicle::create([
            'v_type' => 'motorcycle',
            'plate' => 'HGM-0I88',
            'color' => 'red',
            'brand' => 'Honda',
        ]);
        Vehicle::create([
            'v_type' => 'van',
            'plate' => 'NQN-6F90',
            'color' => 'black',
            'brand' => 'Volks',
        ]);

        Park::create([
            'vehicle_id' => '1',
            'lot' => 'B15',
            'status' => 'occupied',
        ]);
        Park::create([
            'vehicle_id' => '2',
            'lot' => 'B16',
            'status' => 'occupied',
        ]);
        Park::create([
            'vehicle_id' => '3',
            'lot' => 'C3',
            'status' => 'occupied',
        ]);
        Park::create([
            'vehicle_id' => '3',
            'lot' => 'C4',
            'status' => 'occupied',
        ]);
        Park::create([
            'vehicle_id' => '3',
            'lot' => 'C5',
            'status' => 'occupied',
        ]);

        Park::create([
            'vehicle_id' => '1',
            'lot' => 'B10',
            'status' => 'free',
        ]);
        Park::create([
            'vehicle_id' => '2',
            'lot' => 'B15',
            'status' => 'free',
        ]);

        Park::create([
            'vehicle_id' => '3',
            'lot' => 'C3',
            'status' => 'free',
        ]);
        Park::create([
            'vehicle_id' => '3',
            'lot' => 'C4',
            'status' => 'free',
        ]);
        Park::create([
            'vehicle_id' => '3',
            'lot' => 'C5',
            'status' => 'free',
        ]);
    }
}
