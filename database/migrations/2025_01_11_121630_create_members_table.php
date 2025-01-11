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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_information');
            $table->string('membership_package_id')->nullable();
            $table->string('gender');
            $table->date('join_date');
            $table->string('status');
            $table->timestamps();

            // Foreign key
            //$table->foreign('membership_package_id')->references('id')->on('membership_packages');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
