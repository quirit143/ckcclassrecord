<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_grade', function (Blueprint $table) {
            $table->id('gradeid');
            $table->foreignId('studid')->constrained('tb_students')->onDelete('cascade');
            $table->string('quiz_description');
            $table->date('quiz_date');
            $table->integer('quiz_score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_grade');
    }
};
