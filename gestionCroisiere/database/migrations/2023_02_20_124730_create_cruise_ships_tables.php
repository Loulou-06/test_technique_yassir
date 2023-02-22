<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCruiseShipsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{

    Schema::create('cruise_ships', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('image');
        $table->text('description')->nullable();
        $table->year('year_of_construction');
        $table->decimal('ship_length', 10, 2);
        $table->decimal('ship_width', 10, 2);
        $table->unsignedBigInteger('company_id');
        $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        $table->timestamps();
    });
}
}
