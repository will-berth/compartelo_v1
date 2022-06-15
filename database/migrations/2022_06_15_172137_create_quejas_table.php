<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quejas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('renta_id')->unsigned();
            $table->string('estado', 50)->nullable(false);
            $table->string('tipo', 50)->nullable(false);
            $table->string('descripcion', 200)->nullable(false);
            $table->date('fecha')->nullable(false);
            $table->string('img1', 100)->nullable(false);
            $table->string('img2', 100)->nullable(false);
            $table->string('img3', 100)->nullable(false);
            $table->timestamps();
            $table->foreign('renta_id')->references('id')->on('rentas')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quejas');
    }
}
