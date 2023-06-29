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
        Schema::create('calificacionnotas', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_instrevaluacion')->nullable();
            $table->foreign('id_instrevaluacion')
                ->references('id')
                ->on('instrevaluacion')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('id_consoasistencia')->nullable();
            $table->foreign('id_consoasistencia')
                ->references('id')
                ->on('consoasistencia')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->date('fecha');
            $table->time('hora');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificacionnotas');
    }
};
