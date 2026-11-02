<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mock_interviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('track_id')->constrained('career_tracks')->cascadeOnDelete();
            $table->decimal('score', 6, 2)->nullable();
            $table->index(['user_id', 'track_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mock_interviews');
    }
};
