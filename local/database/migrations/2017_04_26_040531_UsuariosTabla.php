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
            $table->string('nombres',300);
            $table->string('apellidos',300);
            $table->string('email',80);
            $table->string('telefono',50);
            $table->string('eds',100);
            $table->string('asesor',100);
            $table->integer('tipo_usuario')->default(0);
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
