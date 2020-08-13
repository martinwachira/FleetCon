<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
			$table->engine = "InnoDB";
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
            $table->text("mobile_no")->nullable();
            $table->bigInteger("country")->nullable();
            $table->text("mobile_verify_code")->nullable();
            $table->text("image")->nullable();
            $table->bigInteger("user_role")->nullable();
            $table->text("user_code")->nullable();
            $table->bigInteger("verify_code")->nullable();
            $table->text("mobile_verify_at")->nullable();
            $table->bigInteger("type_id")->nullable();
            $table->bigInteger("verify_password");
            $table->integer("from_api");            
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
        Schema::dropIfExists('users');
    }
}
