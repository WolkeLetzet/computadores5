<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Computers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('computers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('oficina');
            $table->string('responsable');
            $table->string('tipo_uso');
            $table->string('fecha');
            $table->string('marca');
            $table->string('modelo'); 
            $table->string('ram');
            $table->string('almacenamiento');
            $table->string('SO');
            $table->string('comentarios')->nullable();
            
            
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
        //
    }
}
