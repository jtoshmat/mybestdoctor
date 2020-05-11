<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('doctors_name', 100);
            $table->char('speciality_type', 100);
            $table->char('speciality_title', 100);
            $table->text('spec_desc1');
            $table->text('spec_desc2');
            $table->text('spec_desc3');
            $table->text('spec_desc4');
            $table->text('location');
            $table->float('rate', 8, 2);
            $table->char('price_range', 100);
            $table->text('picture');
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
        Schema::dropIfExists('doctors');
    }
}
