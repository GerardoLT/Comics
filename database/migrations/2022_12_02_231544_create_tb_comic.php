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
        Schema::create('tb_comic', function (Blueprint $table) {
            $table->increments('idcomic');
            $table->string('nombre');
            $table->string('edicion');
            $table->string('compania');
            $table->string('cantidad');
            $table->string('precioCompra');
            $table->string('precioVenta');
            $table->date('fechaIngreso');
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
        Schema::dropIfExists('tb_comic');
    }
};
