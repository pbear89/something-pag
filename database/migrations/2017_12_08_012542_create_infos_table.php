<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_online')->default('0');
            $table->string('str_nombre_pag', 250)->default('null');
            $table->string('str_telf', 250)->default('null');
            $table->string('str_facebook', 250)->default('null');
            $table->string('str_twitter', 250)->default('null');
            $table->string('str_instagram', 250)->default('null');
            $table->string('str_email', 250)->default('null');
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
        Schema::dropIfExists('infos');
    }
}
