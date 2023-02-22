<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabinsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->text('description')->nullable();
            $table->decimal('area', 10, 2);
            $table->unsignedBigInteger('cruise_ship_id');
            $table->foreign('cruise_ship_id')->references('id')->on('cruise_ships')->onDelete('cascade');
            $table->timestamps();
        });
    }
}
