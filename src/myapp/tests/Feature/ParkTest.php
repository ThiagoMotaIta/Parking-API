<?php

namespace Tests\Feature;

use App\Models\Park;
use Tests\TestCase;

class ParkTest extends TestCase
{
    /**
     * List all slots - Testing
     */
    public function test_get_all_slots(): void
    {
        $park = Park::distinct('lot')->get();
        $response = $this
            ->get('api/parking-lot');

        $response->assertStatus(202);
    }


    /**
     * Park a Vehicle - Testing
     */
    public function test_park_a_vehicle(): void
    {
       
        $response = $this->post('api/parking-spot/1/park', [
            "vehicle_plate" => "PNZ-0E96",
            "vehicle_color" => "gray",
            "vehicle_brand" => "GM-Chevrolet",
            "vehicle_type" => "car"
        ]);

        $response->assertStatus(202);
        $this->assertDatabaseHas('parks', ['vehicle_id' => '1']);
    }


    /**
     * Unpark a Vehicle - Testing
     */
    public function test_unpark_a_vehicle(): void
    {
       
        $response = $this->post('api/parking-spot/1/unpark', [
            "vehicle_type" => "car"
        ]);

        $response->assertStatus(202);
        $this->assertDatabaseHas('parks', ['vehicle_id' => '1', 'status' => 'free']);
    }
}
