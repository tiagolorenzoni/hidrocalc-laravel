<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vazao_turbinada_uhbc extends Model {

    protected $fillable = ['nivel_reservatorio_bc', 'queda_bruta_bc', 'potencia_bc', 'vazao_turbinada_bc'];
    protected $guarded = ['id_vaz_tur_bc', 'created_at', 'update_at', 'deleted_at'];
//define nome da tabela
    protected $table = 'vazao_turbinada_uhbcs';

}
