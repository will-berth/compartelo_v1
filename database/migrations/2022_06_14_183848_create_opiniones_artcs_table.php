<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpinionesArtcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opiniones_artcs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('articulo_id')->unsigned();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('opinion', 200)->nullable(false);
            $table->datetime('f_opinion')->nullable(false);
            $table->integer('califi')->nullable(false);
            $table->string('tipo', 50)->nullable(false);
            $table->timestamps();
            $table->foreign('articulo_id')->references('id')->on('articulos')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opiniones_artcs');
    }
}
