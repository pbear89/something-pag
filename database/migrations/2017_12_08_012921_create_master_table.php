<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master', function (Blueprint $table) {
            $table->increments('id');

        //Tablero Opciones
            $table->integer('int_producto')->default('0');
            $table->integer('int_marca')->default('0');
            $table->integer('int_subcategoria')->default('0');
            $table->integer('int_blog')->default('0');
            $table->integer('int_idioma')->default('0');
            $table->integer('int_moneda')->default('0');
            $table->integer('int_pedidos')->default('0');
            $table->integer('int_galeria')->default('0');
            $table->integer('int_colorpk')->default('0');
            $table->integer('int_distribuidores')->default('0');
            $table->integer('int_comentarios')->default('0');
            $table->integer('int_busqueda')->default('0');
            $table->integer('int_nuevos')->default('0');
            $table->integer('int_vendidos')->default('0');
            $table->integer('int_mayorista')->default('0');
            $table->integer('int_pdfenvio')->default('0');
            $table->integer('int_catalogo')->default('0');
            $table->integer('int_despacho')->default('0');
            $table->integer('int_descuento')->default('0');
            $table->integer('int_imglimit')->default('0');
            $table->integer('int_digital_product')->default('0');
            $table->integer('int_compartir')->default('0');
            $table->integer('int_favoritos')->default('0');
            $table->integer('int_excel_products')->default('0');
            $table->integer('int_banner2')->default('0');
            $table->integer('int_boletin')->default('0');
            $table->integer('int_facebook')->default('0');
            $table->integer('int_gmail')->default('0');
            $table->integer('int_calculo_envio')->default('0');
            $table->integer('int_por_kilo')->default('0');
            $table->integer('int_tiempo_compra')->default('0');
            $table->integer('int_excel_users')->default('0');
            $table->integer('int_descarga_pdf')->default('0');
            $table->integer('int_MP')->default('0');
            $table->integer('int_instagram')->default('0');
            $table->integer('int_amazon')->default('0');
            $table->integer('int_seo')->default('0');

        //Tamaño Imagenes    
            $table->integer('int_product_w')->default('450');
            $table->integer('int_product_h')->default('600');
            $table->integer('int_slider_w')->default('1280');
            $table->integer('int_slider_h')->default('623');
            $table->integer('int_galeria_w')->default('450');
            $table->integer('int_galeria_h')->default('450');

        //Otros Datos
            $table->string('str_logo')->default('null');
            $table->string('str_dominio')->default('null');
            $table->string('str_mail_info')->default('null');
            $table->string('str_mail_ventas')->default('null');
            $table->string('str_mail_pass')->default('null');
            $table->string('str_mail_header')->default('null');
            $table->string('str_img_carga')->default('null');
            $table->string('str_MP_id')->default('null');
            $table->string('str_MP_secret')->default('null');

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
        Schema::dropIfExists('master');
    }
}
