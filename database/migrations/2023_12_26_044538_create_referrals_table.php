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
        Schema::create('referrals', function (Blueprint $table) {
            $table->id('referral_id');
            $table->date('referral_date');
            $table->string('referral_reason');
            $table->string('referral_description');
            $table->string('facility_name');
            $table->string('facility_address');
            $table->string('contact_number');
        });

        Schema::table('referrals', function (Blueprint $table) {
            $table->unsignedBigInteger('checkup_id');
            $table->foreign('checkup_id')->references('checkup_id')->on('checkups');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referrals');
    }
};
