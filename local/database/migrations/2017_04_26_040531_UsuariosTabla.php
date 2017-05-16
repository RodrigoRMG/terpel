<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class UsuariosTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('usuario',100)->unique();
            $table->string('password',500);
            $table->string('cedula')->unique();
            $table->string('nombres',300)->default("");
            $table->string('apellidos',300)->default("");
            $table->string('email',80)->default("");
            $table->string('telefono',50)->default("");
            $table->string('eds',100)->default("");
            $table->string('asesor',100)->default("");
            $table->integer('tipo_usuario')->default(0);
            $table->integer('terminos')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->primary('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('usuarios');
    }
}
