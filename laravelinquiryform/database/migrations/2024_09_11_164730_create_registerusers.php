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
        Schema::create('registerusers', function (Blueprint $table) {
            $table->id();
            $table->string('courseName'); // Course name field
            $table->date('course_Enroll_Date'); // Course enroll date field
            $table->string('email')->unique(); // Email field (unique)
            $table->string('username'); // Username field
            $table->string('phone_Number'); // Phone number field
            $table->string('country'); // Country field
            $table->string('job_role'); // Job role field
            $table->string('service'); // Service field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registerusers');
    }
};
