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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->enum('v_type', ['motorcycle', 'car', 'van']);
            $table->string('plate', 20);
            $table->string('color', 20);
            $table->string('brand', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('park');
        Schema::dropIfExists('parks');
        Schema::dropIfExists('vehicle');
    }
};
