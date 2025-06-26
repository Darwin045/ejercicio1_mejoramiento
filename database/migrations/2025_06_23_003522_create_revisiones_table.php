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
        // no es necesaio declarar los datos como booleano al menos que se pida como requerimiento
        Schema::create('revisiones', function (Blueprint $table) {
            $table->id();
            $table->string('filtro');
            $table->string('aceite');
            $table->string('frenos');
            $table->foreignId('coche_id')->constrained('coches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisiones');
    }
};
