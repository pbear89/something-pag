<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('str_titulo', 150)->default('null');
            $table->string('str_titulo_ing', 150)->default('null');
            $table->text('str_contenenido')->default('null');
            $table->text('str_contenenido_ing')->default('null');
            $table->string('str_imagen', 250)->default('null');
            $table->string('str_descripcion', 400)->default('null');
            $table->string('str_descripcion', 400)->default('null');

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
        Schema::dropIfExists('blogs');
    }
}
