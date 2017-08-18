<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dados_uhbc extends Model {

    protected $fillable = ['data_bc', 'hora_bc', 'nivel_montante_bc', 'nivel_jusante_bc', 'geracao_ug1_bc', 'geracao_ug2_bc', 'estadoug1_bc', 'estadoug2_bc', 'hora_cheia_bc'];
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];
//define nome da tabela
    protected $table = 'dados_uhbcs';
    
    const created_at = 'creation_date';
    const update_at = 'last_update';
    
    protected $dateFormat = 'Y-m-d';

}
