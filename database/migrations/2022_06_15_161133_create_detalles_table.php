<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('renta_id')->unsigned();
            $table->bigInteger('articulo_id')->unsigned();
            $table->integer('cantidad')->nullable(false);
            $table->integer('importe')->nullable(false);
            $table->dateTime('fecha_renta', 6)->nullable(false);
            $table->dateTime('fecha_devolucion',6)->nullable(false);
            $table->boolean('estado', 50)->nullable(false);
            $table->timestamps();
            $table->foreign('renta_id')->references('id')->on('rentas')->onUpdate('cascade')
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
        Schema::dropIfExists('detalles');
    }
}
