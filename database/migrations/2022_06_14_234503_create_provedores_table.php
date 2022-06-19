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
        Schema::create('provedores', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 30);
            $table->string("apellido", 50);
            $table->string("identificacion", 15);
            $table->string("departamento",20);
            $table->string("municipio",20);
            $table->string("telefono",20)->nullable();
            $table->string("pais", 20);
            $table->string("vereda", 20);
            $table->string("altura_finca",10);
            $table->string("imagen",50);
            $table->text("historia", 200);
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
        Schema::dropIfExists('provedores');
    }
};
