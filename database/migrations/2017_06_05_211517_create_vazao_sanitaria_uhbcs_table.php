<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVazaoSanitariaUhbcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vazao_sanitaria_uhbcs', function (Blueprint $table) {
            $table->increments('id_vaz_san_bc');
            $table->float('nivel_reservatorio_bc')->nullable();//pode ser null
            $table->float('vazao_sanitaria_bc')->nullable();          
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
        Schema::drop('vazao_sanitaria_uhbcs');
    }
}
