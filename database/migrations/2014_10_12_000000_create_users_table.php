<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('nombre', 100)->nullable(false);
            $table->date('f_nacimiento')->nullable(false);
            $table->string('sexo', 9)->nullable(false);
            $table->char('telefono', 10)->nullable(false);
            $table->string('usuario')->nullable(false)->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('foto_per', 100)->nullable(true);
            $table->string('ine_frontal', 100)->nullable(false);
            $table->string('ine_reverso', 100)->nullable(false);
            $table->string('comprobante', 100)->nullable(false);
            $table->boolean('email_verif')->nullable(true);
            $table->float('saldo')->nullable(false);
            $table->string('ciudad', 50)->nullable(false);
            $table->string('estado', 50)->nullable(false);
            $table->string('municipio', 50)->nullable(false);
            $table->string('cp', 5)->nullable(false);
            $table->string('colonia', 50)->nullable(false);
            $table->string('calle', 50)->nullable(false);
            $table->string('n_exterior', 10)->nullable(false);
            $table->string('n_inteior', 10)->nullable(true);
            $table->string('referencia', 200)->nullable(false);
            $table->boolean('estatus')->nullable(true);
            $table->string('api_token', 100)->nullable(true);
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
}
