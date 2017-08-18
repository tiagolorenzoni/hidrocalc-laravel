<?php

require('conexaobd.php');
//require_once 'Define.php';

/**
 * Miscellaneous utility methods. Alteracao 23/05/2017
 */
final class Utils_uhbc {

    private function __construct() {
        
    }

    public static function busca_volume($cota) {
        $arrayG2 = 0;
        if ($cota != null)
        {
            $volume_util_bc = \mysql_query("SELECT volume_util_bc FROM cota_volume_uhbc WHERE cota_bc = $cota");
            $arrayG2 = mysql_fetch_array($volume_util_bc);
        }
        return "{$arrayG2 [0]}";
    }

    public static function busca_volume_total($cota) {
        $array_vol_total = 0;
        if ($cota != null)
        {
        $volume_total_bc = \mysql_query("SELECT  volume_total_bc FROM cota_volume_uhbc WHERE cota_bc = $cota");
        $array_vol_total = mysql_fetch_array($volume_total_bc);
        }      
        return "{$array_vol_total [0]}";
    }

}
