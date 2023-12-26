<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checkups', function (Blueprint $table) {
            $table->id('checkup_id');
            $table->string('medication_prescribed');
            $table->string('diagnosis');
            $table->string('referral');
        });

        Schema::table('checkups', function (Blueprint $table) {
            $table->unsignedBigInteger('appointment_id');
            $table->unsignedBigInteger('schedule_id');
            $table->foreign('appointment_id')->references('appointment_id')->on('appointments');
            $table->foreign('schedule_id')->references('schedule_id')->on('doctor_schedules');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkups');
    }
};
