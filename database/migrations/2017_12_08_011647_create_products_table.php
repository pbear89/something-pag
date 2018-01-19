<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('str_nombre', 100);
            $table->string('str_nombre_ing', 100)->default('null');
            $table->integer('id_categories');
            $table->integer('id_subcategories')->default('0');
            $table->integer('int_activo')->default('1');
            $table->string('str_seo')->default('null');
            $table->text('str_descripcion')->nullable();
            $table->text('str_descripcion_ing')->nullable();
            $table->double('dbl_precio', 10, 2);
            $table->integer('int_descuento')->default('0');
            $table->integer('id_marca')->default('0');
            $table->integer('tipo')->default('0');
            $table->string('asin', 500)->default('null');
            $table->string('model', 500)->default('null');
            $table->string('upc', 500)->default('null');
            $table->string('str_archivopdf')->default('null');
            $table->string('str_sincaracteres', 100);
            $table->string('str_sincaracteres_ing', 100)->default('null');
           
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
