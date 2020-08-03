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
            $table->bigInteger("fleet_number");
            $table->text("make");
            $table->text("model");
            $table->bigInteger("vin_number");
            $table->bigInteger("engine_number");
            $table->bigInteger("horse_registration");
            $table->bigInteger("start_milage");
            $table->bigInteger("service_intervals");
            $table->date("cof_expiry_date");
            $table->date("rotran_expiry_date");
            $table->text("truck_owner");
            $table->text("bulk_product");
            $table->bigInteger("load_capacity");
            $table->bigInteger("working_days_per_month");

            // ! trailer details. 
            $table->bigInteger("leader_registration");
            $table->date("trailer_cof_expiry_date");
            $table->date("trailer_rotran_expiry_date");

            // ! follower details.
            $table->bigInteger("follower_registration");
            $table->date("follower_cof_expiry_date");
            $table->date("follower_rotran_expiry_date");

            // ! financial data. 
            $table->bigInteger("horse_installment");
            $table->bigInteger("trailer_installment");
            $table->bigInteger("horse_insurance");
            $table->bigInteger("trailer_insurance");
            $table->bigInteger("tracker_cost");
            $table->bigInteger("fleet_con_premiums");
            $table->bigInteger("mobile_airtime_and_data_cost");
            $table->bigInteger("maintenance_rate");

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
