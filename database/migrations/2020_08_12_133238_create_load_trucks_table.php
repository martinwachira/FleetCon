<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoadTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('load_trucks', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('clock_in_id');
            $table->unsignedBigInteger('truck_id');
            $table->text('loading_ticket_no');
            $table->bigInteger('loading_tonnage');
            $table->text('loading_img_url');
            $table->text('offloading_ticket_no');
            $table->bigInteger('offloading_tonnage');
            $table->text('offloading_img_url');            
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
        Schema::dropIfExists('load_trucks');
    }
}
