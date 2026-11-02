<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('url')->nullable();
            $table->string('type')->nullable();
            $table->string('level')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
