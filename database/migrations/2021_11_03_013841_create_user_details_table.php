<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('sex')->nullable()->default('NA');
            $table->string('religion')->nullable()->default('NA');
            $table->string('avatar')->nullable()->default('NA');
            $table->string('nationality')->nullable()->default('NA');
            $table->string('date_of_birth')->nullable()->default('NA');
            $table->string('place_of_birth')->nullable()->default('NA');
            $table->string('civil_status')->nullable()->default('NA');
            $table->string('phone_number')->nullable()->default('NA');
            $table->string('street')->nullable()->default('NA');
            $table->string('city')->nullable()->default('NA');
            $table->string('province')->nullable()->default('NA');
            $table->string('state')->nullable()->default('NA');
            $table->string('tid_sid')->nullable()->default('NA');
            $table->string('year_course')->nullable()->default('NA');
            $table->string('batch')->nullable()->default('NA');
            $table->string('contact_persion')->nullable()->default('NA');
            $table->string('relationship')->nullable()->default('NA');
            $table->string('contact_information')->nullable()->default('NA');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('user_details');
    }
}
