<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlaceController extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pĺaces', function (Blueprint $table) {
            $table->id();
            $table->string('placeName')->unique();
            $table->string('street');
            $table->string('number');
            $table->string('additional');
            $table->string('neighborhood');
            $table->string('postalCode');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('addtionalInfos');
            $table->string('typeOfDonations');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
