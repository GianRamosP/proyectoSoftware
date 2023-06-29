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
        Schema::create('consonotas', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_calificacionnota')->nullable();
            $table->foreign('id_calificacionnota')
                ->references('id')
                ->on('calificacionnotas')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('id_comisionesarea')->nullable();
            $table->foreign('id_comisionesarea')
                ->references('id')
                ->on('comisionesareas')
                ->onDelete('set null')
                ->onUpdate('cascade');
                
            $table->string('semestre');
            $table->date('fecha');
            $table->integer('idDocente');
            $table->string('firma');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consonotas');
    }
};
