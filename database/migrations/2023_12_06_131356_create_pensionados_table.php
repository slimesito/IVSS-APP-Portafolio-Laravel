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
        Schema::create('pensionados', function (Blueprint $table) {
            $table->id();
            $table->string('apellido')->nullable();
            $table->string('nombre')->nullable();
            $table->string('cedula')->nullable();
            $table->string('sexo')->nullable();
            $table->string('estado')->nullable();
            $table->string('nacimiento')->nullable();
            $table->string('fallecimiento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pensionados');
    }
};
