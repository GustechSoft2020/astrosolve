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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('gender')->nullable();
            $table->string('languages')->nullable();
            $table->string('skills')->nullable();
            $table->string('expertise')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->string('pancardnum')->nullable();
            $table->string('bankname')->nullable();
            $table->string('accounttype')->nullable();
            $table->string('accountnumber')->nullable();
            $table->string('ifsccode')->nullable();
            $table->string('branchcity')->nullable();
            $table->string('branchaddress')->nullable();
            $table->string('upiId')->nullable();
            $table->string('paytmNumber')->nullable();
            $table->string('profilePic')->nullable();
            $table->string('uploadIdProof')->nullable();
            $table->string('altemail')->nullable();
            $table->string('whatsappnum')->nullable();
            $table->string('altmobnum')->nullable();
            $table->string('suitabletimeofInterview')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
