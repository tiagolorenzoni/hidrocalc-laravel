<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosUhbcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_uhbcs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_bc');
            $table->time('hora_bc');
            $table->float('nivel_montante_bc');
            $table->float('nivel_jusante_bc');
            $table->float('geracao_ug1_bc');
            $table->float('geracao_ug2_bc');
            $table->enum('estadoug1_bc', array('G','P','V'))->default('G');
            $table->enum('estadoug2_bc', array('G','P','V'))->default('G');
            $table->boolean('hora_cheia_bc')->default(true);
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
        Schema::drop('dados_uhbcs');
    }
}
