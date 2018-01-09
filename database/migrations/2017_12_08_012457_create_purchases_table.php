<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->default('null');
            $table->integer('int_tipo_pago')->default('null');
            $table->double('int_total', 50, 2)->default('0');
            $table->integer('int_estatus')->default('0');
            $table->integer('int_envio')->default('0');          
            $table->integer('int_factura')->default('0');
            $table->integer('int_moneda')->default('0');
            $table->double('int_tasa_cambio', 50, 2)->default('0');
            $table->string('str_empresa_envio', 100)->default('null');
            $table->string('str_num_envio', 100)->default('null');
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
        Schema::dropIfExists('purchases');
    }
}
