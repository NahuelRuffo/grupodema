<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('tipo', ['tipo1', 'tipo2']);  // Ajusta según tus necesidades
            $table->integer('stock')->default(0);
            $table->date('fecha_ingreso');
            // Otros campos según sea necesario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
