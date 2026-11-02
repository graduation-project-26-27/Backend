<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_templates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('track_id')->constrained('career_tracks')->cascadeOnDelete();
            $table->string('title');
            $table->string('level')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_templates');
    }
};
