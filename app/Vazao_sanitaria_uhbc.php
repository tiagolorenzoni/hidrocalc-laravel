<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vazao_sanitaria_uhbc extends Model {

    protected $fillable = ['nivel_reservatorio_bc', 'vazao_sanitaria_bc'];
    protected $guarded = ['id_vaz_san_bc', 'created_at', 'update_at', 'deleted_at'];
//define nome da tabela
    protected $table = 'vazao_sanitaria_uhbcs';

}
