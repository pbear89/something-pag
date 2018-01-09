<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payreports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->default('0');
            $table->integer('int_compra')->default('0');
            $table->integer('int_tipo')->default('0');
            $table->string('str_banco_transferencia', 100);
            $table->integer('int_banco')->default('0');
            $table->integer('int_transferencia')->default('0');
            $table->double('int_monto_pago', 50, 2);
            $table->string('str_fecha_pago', 100);

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
        Schema::dropIfExists('payreports');
    }
}
