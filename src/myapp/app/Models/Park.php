<?php

namespace App\Models;

use App\Enums\ParkEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'lot',
        'status',
    ];

    protected $casts = [
        'status' => ParkEnum::class,
    ];
}
