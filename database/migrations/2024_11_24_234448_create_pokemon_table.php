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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id(); //esses dois não mexe 
            $table->timestamps();
            $table->string('name', 200); //aqui sao as colunas da tabela, deve ter o tipo e o nome
            $table->string('type', 100);
            $table->integer('power');
            $table->text('image');
            $table->foreignId('coach_id')->references('id')->on('coaches');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};