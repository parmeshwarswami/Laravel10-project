<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('airport');
            $table->string('airport_code');
            $table->string('city');
            $table->string('city_code');
            $table->string('country');
            $table->string('country_code');
            $table->string('region');
            $table->string('region_code');
            $table->string('continent')->nullable();
            $table->string('continent_code')->nullable();
            $table->string('longitude_x')->nullable();
            $table->string('latitude_y')->nullable();
            $table->string('priority')->nullable();
            $table->string('popularity')->nullable();
            $table->string('classification')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
