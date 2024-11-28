<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->string('phone')->nullable(); // Adiciona o campo phone
            $table->string('email')->nullable(); // Adiciona o campo email
            $table->text('address')->nullable(); // Adiciona o campo address
        });
    }

    public function down(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->dropColumn(['phone', 'email', 'address']); // Remove os campos se a migração for revertida
        });
    }
};
