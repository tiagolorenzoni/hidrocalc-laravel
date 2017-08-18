<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVazaoTurbinadaUhbcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vazao_turbinada_uhbcs', function (Blueprint $table) {
            $table->increments('id_vaz_tur_bc');
            $table->float('queda_bruta_bc')->nullable();//pode ser null
            $table->float('potencia_bc')->nullable();
            $table->float('vazao_turbinada_bc')->nullable();  
            $table->timestamps();//cria create_at e update_at
            $table->softDeletes();//cria uma coluna delete_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vazao_turbinada_uhbcs');
    }
}
