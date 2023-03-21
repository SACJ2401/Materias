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

        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->string('Asignatura');
            $table->string('Actividad1');
            $table->integer('CalificacionAct1');
            $table->string('Actividad2');
            $table->integer('CalificacionAct2');

            $table->timestamps();
        });
         
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaturas');
    }
};
