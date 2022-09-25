<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

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
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('periodo_id')->nullable(false);
            $table->unsignedBigInteger('marca_id')->nullable(false);
            $table->string('clave',50)->nullable(false)->unique();
            $table->string('articulo',50)->nullable(false);     
            $table->string('desc',50)->nullable(false);
            $table->double('precio')->nullable(false);
            $table->boolean('esta_rentada')->nullable(false)->default(false);
            $table->boolean('activo')->nullable(false)->default(true);
            $table->string('img1',100)->nullable(false);
            $table->string('img2',100)->nullable(false);
            $table->string('img3',100)->nullable(false);
            $table->string('img4',100)->nullable(false);
            $table->string('estado', 30)->nullable(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('periodo_id')->references('id')->on('periodos')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
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
