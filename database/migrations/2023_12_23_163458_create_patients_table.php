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
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patient_id');
            $table->string('password');
            $table->string('patient_first_name');
            $table->string('patient_last_name');
            $table->string('patient_marital_status');
            $table->date('patient_date_of_birth');
            $table->string('patient_gender');
            $table->string('patient_address');
            $table->string('patient_phone');
            $table->string('patient_email'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
