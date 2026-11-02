<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('education_level')->nullable();
            $table->text('experience_summary')->nullable();
            $table->unsignedSmallInteger('weekly_hours')->nullable();
            $table->string('career_goal')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
