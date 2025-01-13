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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Trainer's name
            $table->string('phone_no'); // Phone number
            $table->string('trainer_id')->unique(); // Unique trainer ID
            $table->string('specialty'); // Trainer's specialty
            $table->enum('gender', ['Male', 'Female', 'Other']); // Gender
            $table->date('hire_date'); // Hire date
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
