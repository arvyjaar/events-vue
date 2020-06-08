<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_dates', function (Blueprint $table) {
            $table->id();
            $table->dateTime('datetime');
            $table->integer('seats');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_date');
    }
}
