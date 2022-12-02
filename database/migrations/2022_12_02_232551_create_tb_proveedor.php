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
        Schema::create('tb_proveedor', function (Blueprint $table) {
            $table->increments('idproveedor');
            $table->string('empresa');
            $table->string('direccion');
            $table->string('pais');
            $table->string('contacto');
            $table->string('telefono');
            $table->string('correo');
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
        Schema::dropIfExists('tb_proveedor');
    }
};
