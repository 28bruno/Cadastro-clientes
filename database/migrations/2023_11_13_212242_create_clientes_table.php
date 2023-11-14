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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('codBomControle')->notNull();
            $table->string('cnpjCpf', 18)->notNull();
            $table->string('razaoSocial', 100)->notNull();
            $table->string('nomeFantasia', 100)->notNull();
            $table->string('nomeResponsavel', 50)->notNull();
            $table->string('telefone', 20)->notNull();
            $table->string('email', 20)->notNull();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
