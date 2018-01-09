<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InfosIngTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->increments('id');
        $table->string('str_nombre_pag', 250)->default('null');
        $table->text('str_direccion')->default('null');
        $table->string('str_titulo', 250)->default('null');
        $table->text('str_nosotros')->default('null');
        $table->string('str_footer', 250)->default('null');
        $table->text('str_terminos')->default('null');
        $table->text('str_comprar')->default('null');
        $table->text('str_faq')->default('null');

        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
