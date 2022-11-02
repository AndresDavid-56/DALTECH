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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('exit_date');
            $table->decimal('subtotal', $precision = 8, $scale = 2);
            $table->integer('adults_number');
            $table->integer('children_number');
            $table->integer('elderly_number');
            $table->timestamps();
            $table->unsignedBigInteger('from');
            $table->unsignedBigInteger('to');

            $table->unsignedBigInteger('guides_id');
            $table->unsignedBigInteger('transports_id');
            $table->unsignedBigInteger('hotels_id');

            $table->unsignedBigInteger('user_id');            
            
            $table->foreign('from')->references('id')->on('cities');
            $table->foreign('to')->references('id')->on('cities');

            $table->foreign('guides_id')->references('id')->on('guides');
            $table->foreign('transports_id')->references('id')->on('transports');
            $table->foreign('hotels_id')->references('id')->on('hotels');

            $table->foreign('user_id')->references('id')->on('users');

            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};
