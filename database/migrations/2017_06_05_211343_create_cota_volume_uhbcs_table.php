<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotaVolumeUhbcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cota_volume_uhbcs', function (Blueprint $table) {
            $table->increments('id_cota_bc');
            $table->float('cota_bc')->nullable();//pode ser null
            $table->float('volume_total_bc')->nullable();
            $table->float('volume_util_bc')->nullable();
            $table->float('percentual_vu_bc')->nullable();           
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
        Schema::drop('cota_volume_uhbcs');
    }
}
