<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('track_skills', function (Blueprint $table) {
            $table->foreignId('track_id')->constrained('career_tracks')->cascadeOnDelete();
            $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
            $table->unsignedSmallInteger('importance')->nullable();
            $table->primary(['track_id', 'skill_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('track_skills');
    }
};
