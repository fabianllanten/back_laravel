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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->date("fecha")->nullable();
            $table->string("precio_compra",20);
            $table->string("precio_total",20);
            $table->string("cantidad",20);
            $table->string("url_qr",20);
            $table->string("existe_qr",20);
            $table->string("editar",20);
            $table->string("proceso",20);
            $table->string("rendimiento",20);
            $table->string("variedad",10);
            $table->string("fragancia",10);
            $table->string("sabor",10);
            $table->string("sabor_residual",10);
            $table->string("acidez",10);
            $table->string("cuerpo",10);
            $table->string("tasa",10);
            $table->string("puntaje",10);

            $table->timestamps();

            $table->bigInteger("provedor_id")->unsigned();
            $table->foreign("provedor_id")->references("id")->on("provedores");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
};
