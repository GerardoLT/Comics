<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_articulo', function (Blueprint $table) {

            $table->increments('idarticulo');
            $table->string('descripcion');
            $table->string('tipo');
            $table->string('marca');
            $table->string('cantidad');
            $table->date('FechaIngreso');
            $table->string('PrecioCompra');
            $table->string('PrecioVenta');
            $table->integer('idproveedor');
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
        Schema::dropIfExists('tb_articulo');
    }
};
