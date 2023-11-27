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
        Schema::create('Productos', function (Blueprint $table) 
        {
            $table->increments("id_prod");
            $table->string('Nombre')->nullable();
            $table->string('Descripcion')->nullable();
            $table->integer('Precio')->nullable();
            $table->integer('Stock')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Productos');
    }
};
