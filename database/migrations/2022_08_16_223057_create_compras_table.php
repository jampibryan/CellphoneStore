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
            $table->id()->autoIncrement();
            // $table->unsignedBigInteger('cliente_id')->nullable(); 
            // $table->unsignedBigInteger('producto_codigo')->nullable(); 
            $table->unsignedBigInteger('cliente_id')->nullable(); 
            $table->unsignedBigInteger('producto_id')->nullable(); 
            $table->integer('cantidad');
            // $table->string('transaccion');
            // $table->timestamps();
            

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('producto_id')->references('id')->on('productos');
            // $table->foreign('producto_codigo')->references('codigoP')->on('productos');

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
