<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("loading_site");

             // ! Added the relationship between the routes table and the sites table.
             $table->foreign('loading_site')->references('id')->on('sites')->onDelete('cascade')->onUpdate('cascade');

             $table->unsignedBigInteger("off_loading_site");

             // ! Added the relationship between the routes table and the sites table.
             $table->foreign('off_loading_site')->references('id')->on('sites')->onDelete('cascade')->onUpdate('cascade');

             $table->bigInteger("distance");
             $table->integer("turn_around_time");
             $table->integer("possible_trips_per_month");
             $table->bigInteger("rands");
             $table->bigInteger("contract_quantity_per_month")->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
