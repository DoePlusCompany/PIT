<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSACTable extends Migration
{
    public function up()
    {
        Schema::create('sac', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cliente');
            $table->string('email_cliente');
            $table->text('mensagem');
            $table->string('status')->default('aberta');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sac');
    }
}

