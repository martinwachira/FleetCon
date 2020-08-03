<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->timestamps();
            $table->text("name");
            $table->bigInteger("id_number");
            $table->bigInteger("phone_number");
            $table->bigInteger("driver_salary");
            $table->integer("load_bonus");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
