<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_informations', function (Blueprint $table) {
            $table->id();
            $table->string('health_insurance _number');
            $table->string('date_injection');
            $table->string('job');
            $table->string('ethnic');
            $table->string('nationality');
            $table->string('priority_group_id');
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
        Schema::dropIfExists('registration_informations');
    }
}