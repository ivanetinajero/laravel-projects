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
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->string('nombrecorto')->nullable();
            $table->string('estado')->nullable();
            $table->string('entidadtransferente')->nullable();
            $table->string('estadoactual')->nullable();
            $table->string('vigencia')->nullable();
            $table->string('ultimoproceso')->nullable();
            $table->string('etapaactual')->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
