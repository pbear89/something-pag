<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_padre')->default('0');
            $table->string('str_nombre', 100);
            $table->string('str_nombre_ing', 100);
            $table->string('str_seo', 100)->default('null');
            $table->string('str_imagen', 100)->default('null');
            $table->string('str_sincaracteres', 100);
            $table->string('str_sincaracteres_ing', 100)->default('null');
            $table->integer('int_activo')->default('1');
            
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
        Schema::dropIfExists('categories');
    }
}
