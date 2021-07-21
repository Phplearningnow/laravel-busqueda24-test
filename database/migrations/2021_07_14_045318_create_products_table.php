<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('producto_id');
            $table->string('titulo');
            $table->string('descripccion');
            $table->float('precio')->unsigned();
            $table->integer('disponibilidad')->unsigned();
            $table->string('condicion')->default('nuevo');
            $table->string('tipo')->default('vendedor');
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
        Schema::dropIfExists('products');
    }
}
