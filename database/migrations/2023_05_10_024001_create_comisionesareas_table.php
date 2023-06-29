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
        Schema::create('comisionesareas', function (Blueprint $table) {
            $table->id();

            $table->integer('idDocente');
            $table->integer('idAdministrativo');
            $table->string('nombreComision');
            $table->string('macroProcesoComision');
            $table->string('procesoComision');
            $table->string('subProcesoComision');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comisionesareas');
    }
};
