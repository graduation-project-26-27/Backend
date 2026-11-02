<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('template_id')->constrained('project_templates')->cascadeOnDelete();
            $table->text('repo_url')->nullable();
            $table->string('status')->default('not_started');
            $table->index(['user_id', 'template_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_projects');
    }
};
