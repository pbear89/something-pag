<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->default('0');
            $table->string('str_nombre', 250)->default('null');
            $table->string('str_apellido', 250)->default('null');
            $table->string('str_id', 100)->default('null');
            $table->text('str_direccion')->default('null');
            $table->string('str_telf_fijo', 100)->default('null');
            $table->string('str_telf_movil', 100)->default('null');
            $table->string('str_ciudad', 100)->default('null');
            $table->string('str_estado', 100)->default('null');
            $table->string('str_pais', 100)->default('null');
            
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
        Schema::dropIfExists('addresses');
    }
}
