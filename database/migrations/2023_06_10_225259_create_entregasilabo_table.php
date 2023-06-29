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
        Schema::create('entregasilabo', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_planclase')->nullable();
            $table->foreign('id_planclase')
                ->references('id')
                ->on('planclases')
                ->onDelete('set null')
                ->onUpdate('cascade');
                
            $table->integer('idCurso');
            $table->integer('idEstudiante');
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
        Schema::dropIfExists('entregasilabo');
    }
};
