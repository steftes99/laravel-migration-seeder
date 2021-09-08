<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 30);
            $table->string('destination', 50);
            $table->string('hotel-name',30);
            $table->string('hotel-address',50);
            $table->float('hotel-rating', 1.1);
            $table->string('nights',2);
            $table->integer('price');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
