<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesArtcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones_artcs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('articulo_id')->unsigned();
            $table->integer('cali')->nullable(false);
            $table->string('tipo', 50)->nullable(false);
            $table->timestamps();
            $table->foreign('articulo_id')->references('id')->on('articulos')->onUpdate('cascade')
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
        Schema::dropIfExists('calificaciones_artcs');
    }
}
