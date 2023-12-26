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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointment_id');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('symptoms');
            $table->string('comments');
            $table->boolean('status');
        });

        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('schedule_id');
            $table->unsignedBigInteger('staff_id');
            $table->foreign('patient_id')->references('patient_id')->on('patients');
            $table->foreign('schedule_id')->references('schedule_id')->on('doctor_schedules');
            $table->foreign('staff_id')->references('staff_id')->on('staffs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
