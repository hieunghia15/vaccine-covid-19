<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccination_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('applicable_age');
            $table->string('effection');
            $table->string('injection_dose');
            $table->string('injection_time');
            $table->string('manufacture_id');
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
        Schema::dropIfExists('vaccination_types');
    }
}