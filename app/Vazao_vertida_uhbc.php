<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vazao_vertida_uhbc extends Model {

    protected $fillable = ['nivel_reservatorio_bc', 'vazao_vertida_bc'];
    protected $guarded = ['id_vaz_vert_bc', 'created_at', 'update_at', 'deleted_at'];
//define nome da tabela
    protected $table = 'vazao_vertida_uhbcs';

}
