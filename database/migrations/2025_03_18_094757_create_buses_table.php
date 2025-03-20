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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('car_number')->unique(); // державний номер

            $table->foreignId('model_id')->constrained('car_models')->cascadeOnDelete(); //марка авто
            $table->foreignId('driver_id')->nullable()->constrained('drivers')->nullOnDelete(); //Водій авто

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
