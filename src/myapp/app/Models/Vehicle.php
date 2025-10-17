<?php

namespace App\Models;

use App\Enums\VehicleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'v_type',
        'plate',
        'color',
        'brand',
    ];

    protected $casts = [
        'v_type' => VehicleEnum::class,
    ];
}
