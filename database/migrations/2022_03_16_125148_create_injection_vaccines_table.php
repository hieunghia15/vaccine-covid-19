<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInjectionVaccinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('injection_vaccines', function (Blueprint $table) {
            $table->id();
            $table->string('vaccination_number');
            $table->string('vaccination_time');
            $table->string('lot_number');
            $table->string('vaccination_type_id');
            $table->string('vaccine_certificate_id');
            $table->string('vaccination_site_id');
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
        Schema::dropIfExists('injection_vaccines');
    }
}