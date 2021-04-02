<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('denominacion',128);
            $table->string('telefono',50);
            $table->string('horarioAtencion',256);
            $table->string('quienesSomos',1024);
            $table->decimal('latitud');
            $table->decimal('longitud');
            $table->string('domicilio',256);
            $table->string('email',75)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
