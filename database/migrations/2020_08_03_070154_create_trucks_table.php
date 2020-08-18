<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->timestamps();

            // ! horse details.
            $table->longText("fleet_number")->nullable();
            $table->text("make")->nullable();
            $table->text("model")->nullable();
            $table->bigInteger("vin_number")->nullable();
            $table->bigInteger("engine_number")->nullable();
            $table->bigInteger("horse_registration")->nullable();
            $table->bigInteger("start_milage")->nullable();
            $table->bigInteger("service_intervals")->nullable();
            $table->date("cof_expiry_date")->nullable();
            $table->date("rotran_expiry_date")->nullable();
            $table->text("truck_owner")->nullable();
            $table->text("bulk_product")->nullable();
            $table->bigInteger("load_capacity")->nullable();
            $table->bigInteger("working_days_per_month")->nullable();

            // ! trailer details. 
            $table->bigInteger("leader_registration")->nullable();
            $table->date("trailer_cof_expiry_date")->nullable();
            $table->date("trailer_rotran_expiry_date")->nullable();

            // ! follower details.
            $table->bigInteger("follower_registration")->nullable();
            $table->date("follower_cof_expiry_date")->nullable();
            $table->date("follower_rotran_expiry_date")->nullable();

            // ! financial data. 
            $table->bigInteger("horse_installment")->nullable();
            $table->bigInteger("trailer_installment")->nullable();
            $table->bigInteger("horse_insurance")->nullable();
            $table->bigInteger("trailer_insurance")->nullable();
            $table->bigInteger("tracker_cost")->nullable();
            $table->bigInteger("fleet_con_premiums")->nullable();
            $table->bigInteger("mobile_airtime_and_data_cost")->nullable();
            $table->bigInteger("maintenance_rate")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trucks');
    }
}
