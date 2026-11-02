<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('interview_qas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('interview_id')->constrained('mock_interviews')->cascadeOnDelete();
            $table->text('question');
            $table->longText('answer')->nullable();
            $table->text('feedback')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('interview_qas');
    }
};
