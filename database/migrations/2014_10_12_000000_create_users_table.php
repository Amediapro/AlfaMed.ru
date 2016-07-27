<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->date('birth_date');
            $table->integer('sex');
            $table->integer('passport_series');
            $table->integer('passport_number');
            $table->string('passport_issued_by');
            $table->date('passport_issued_date');
            $table->string('subdivision_code');
            $table->string('registration_country');
            $table->string('registration_region_name_type');
            $table->string('registration_region');
            $table->string('registration_city_name_type');
            $table->string('registration_city');
            $table->string('registration_street_name_type');
            $table->string('registration_street');
            $table->string('registration_house');
            $table->string('registration_house_pref_name_type');
            $table->string('registration_house_pref');
            $table->string('registration_apartment');
            $table->string('location_country');
            $table->string('location_region_name_type');
            $table->string('location_region');
            $table->string('location_city_name_type');
            $table->string('location_city');
            $table->string('location_street_name_type');
            $table->string('location_street');
            $table->string('location_house');
            $table->string('location_house_pref_name_type');
            $table->string('location_house_pref');
            $table->string('location_apartment');
            $table->integer('work_post_code');
            $table->string('work_post');
            $table->float('paiment_coefficient');
            $table->integer('status');
            $table->date('recruitment_date');
            $table->date('dismissal_date');
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
        Schema::drop('users');
    }
}
