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
        Schema::create('tb_pedido', function (Blueprint $table) {
            $table->increments('idpedido');
            $table->string('descripcion');
            $table->integer('idcomic');
            $table->integer('idarticulo');
            $table->string('cantidad');
            $table->string('precio');
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
        Schema::dropIfExists('tb_pedido');
    }
};