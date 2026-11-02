<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('user_projects')->cascadeOnDelete();
            $table->decimal('functionality', 5, 2)->nullable();
            $table->decimal('code_quality', 5, 2)->nullable();
            $table->decimal('documentation', 5, 2)->nullable();
            $table->text('feedback')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_evaluations');
    }
};
