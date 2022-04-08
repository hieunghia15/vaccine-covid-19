<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInjectionRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('injection_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('registration_infomation_id');
            $table->string('medical_history_id');
            $table->string('health_declaration_id');
            $table->string('vaccination_consent_form_id');
            $table->string('user_id');
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
        Schema::dropIfExists('injection_registrations');
    }
}