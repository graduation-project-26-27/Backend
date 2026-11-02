<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->string('type')->comment('knowledge, problem, or interest');
            $table->unsignedInteger('version')->default(1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
