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
    Schema::create('pedidos', function (Blueprint $table) {
        $table->string('id_pedido');
        $table->date('fecha_pedido');
        $table->string('linea');
        $table->string('producto');
        $table->string('cantidad');
        $table->string('precio_u');
        $table->string('total');
        $table->enum('estado', ['pendiente', 'facturado', 'anulado'])->default('pendiente');
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