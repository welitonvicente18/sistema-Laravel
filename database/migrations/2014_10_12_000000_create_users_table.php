<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', '255');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', '200');
            $table->bigInteger('cpf');
            $table->date('dt_nascimento');
            $table->string('sexo', '1');
            $table->bigInteger('telefone');
            $table->integer('perfil');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
