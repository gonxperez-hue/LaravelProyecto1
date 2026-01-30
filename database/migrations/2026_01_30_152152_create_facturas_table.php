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
    Schema::create('facturas', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('cliente_id');
        $table->unsignedBigInteger('empleado_id');
        $table->date('fecha');
        $table->decimal('total', 10, 2)->default(0);
        $table->timestamps();

        $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
