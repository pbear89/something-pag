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
        Schema::create('infos_ing', function (Blueprint $table) {

            $table->increments('id');
            $table->string('str_nombre_pag', 250)->default('null');
            $table->text('str_direccion')->nullable();
            $table->string('str_titulo', 250)->default('null');
            $table->text('str_nosotros')->nullable();
            $table->string('str_footer', 250)->default('null');
            $table->text('str_terminos')->nullable();
            $table->text('str_comprar')->nullable();
            $table->text('str_faq')->nullable();

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
        Schema::dropIfExists('infos_ing');
    }
}
