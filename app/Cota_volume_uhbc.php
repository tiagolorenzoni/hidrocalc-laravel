<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cota_volume_uhbc extends Model
{
    protected $fillable = ['cota_bc','volume_total_bc','volume_util_bc','percentual_vu_bc'];
    protected $guarded = ['id_cota_bc', 'created_at', 'update_at','deleted_at'];
    //define nome da tabela
    protected $table = 'cota_volume_uhbcs';
}
