<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roadmaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('track_id')->constrained('career_tracks')->cascadeOnDelete();
            $table->string('status')->default('active');
            $table->unsignedInteger('version')->default(1);
            $table->index(['user_id', 'track_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roadmaps');
    }
};
