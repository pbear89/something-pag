<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario');
            $table->integer('id_producto')->default('0');
            $table->integer('int_cantidad')->default('null');
            $table->integer('int_Transaccion')->default('0');
            $table->integer('id_categoria')->default('null');
            $table->integer('id_talla')->default('0');
            $table->integer('id_color')->default('0');
            $table->integer('id_modelo')->default('0');
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
        Schema::dropIfExists('carts');
    }
}
