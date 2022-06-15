<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_categorias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('articulo_id')->unsigned();
            $table->boolean('estado')->nullable(false);
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('detalles_categorias');
    }
}
