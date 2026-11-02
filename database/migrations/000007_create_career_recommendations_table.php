<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('career_recommendations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('track_id')->constrained('career_tracks')->cascadeOnDelete();
            $table->decimal('match_pct', 5, 2)->nullable();
            $table->json('reasons')->nullable();
            $table->boolean('is_selected')->default(false);
            $table->index(['user_id', 'track_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('career_recommendations');
    }
};
