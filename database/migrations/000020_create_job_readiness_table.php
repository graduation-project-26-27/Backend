<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_readiness', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->decimal('total_score', 6, 2)->nullable();
            $table->json('breakdown_json')->nullable();
            $table->timestamp('calculated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_readiness');
    }
};
