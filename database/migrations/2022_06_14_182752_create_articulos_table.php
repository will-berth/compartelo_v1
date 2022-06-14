<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoria_id')->unsigned();
            $table->string('articulo',50)->nullable(false);
            $table->string('desc',50)->nullable(false);
            $table->double('precio')->nullable(false);
            $table->integer('stock')->nullable(false);
            $table->string('img1',100)->nullable(false);
            $table->string('img2',100)->nullable(false);
            $table->string('img3',100)->nullable(false);
            $table->string('img4',100)->nullable(false);
            $table->boolean('estado')->nullable(false);
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onUpdate('cascade')
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
        Schema::dropIfExists('articulos');
    }
}
