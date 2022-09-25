<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('description_transport');
            $table->integer('capacity_transport');
            $table->decimal('price_one_way', $precision = 8, $scale = 2);
            $table->decimal('price_round_trip', $precision = 8, $scale = 2);
            $table->integer('seat_number');
            $table->string('transport_type');
            $table->string('transport_email')->unique();
            $table->string('transport_phone');
            $table->timestamps();
            $table->unsignedBigInteger('city_id');

            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transports');
    }
};
