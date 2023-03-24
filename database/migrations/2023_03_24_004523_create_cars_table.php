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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('plate', 10)->unique();
            $table->integer('seats');
            $table->string('niv', 17)->nullable();
            $table->smallInteger('year')->nullable();
            $table->integer('gr_co2_per_km');
            $table->string('gas_lt_per_km', 45);
            $table->foreignId('model_id')->constrained('car_models')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
