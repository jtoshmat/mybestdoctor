<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_id')->unsigned();
            $table->string('name');
            $table->string('avatar')->default('default.jpg');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('date_birth')->nullable();
            $table->string('date_admit')->nullable();
            $table->string('date_appt')->nullable();
            $table->string('time_appt')->nullable();
            $table->string('type_patient')->default('New Patient');
            $table->string('condition')->nullable();
            $table->string('price')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
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
        Schema::dropIfExists('my_patients');
    }
}
