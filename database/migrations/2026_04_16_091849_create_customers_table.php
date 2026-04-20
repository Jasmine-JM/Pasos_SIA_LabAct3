<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            // student info
            $table->string('student_id');
            $table->string('name');
            $table->enum('gender', ['Male','Female']);
            $table->string('department');
            $table->date('dob');

            // clinic tracking
            $table->dateTime('time_in');
            $table->dateTime('time_out')->nullable();
            $table->text('reason');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};