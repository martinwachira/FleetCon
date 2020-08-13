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

            $table->unsignedBigInteger('truck_id');

            $table->foreign('truck_id')->references('id')->on('trucks')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('clock_in_id')->nullable();

            $table->foreign('clock_in_id')->references('id')->on('clock_ins')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('route_id'); 
            
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade')->onUpdate('cascade');

            $table->text('loading_ticket_no')->nullable();
            $table->bigInteger('loading_tonnage')->nullable();
            $table->text('loading_img_url')->nullable();
            $table->text('offloading_ticket_no')->nullable();
            $table->bigInteger('offloading_tonnage')->nullable();
            $table->text('offloading_img_url')->nullable();            
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
