<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->string('lot', 3);
            $table->enum('status', ['occupied', 'free']);
            $table->timestamps();
        });

        //FK
        Schema::table('parks', function (Blueprint $table) {
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parks');
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('park');
        Schema::dropIfExists('parks');
        Schema::dropIfExists('vehicle');
    }
};
