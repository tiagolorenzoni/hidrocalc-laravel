<?php

/**
 * Metodos. Alteracao 22/06/2017
 */

namespace App\Utils;

final class Uhbc {

    private function __construct() {
        
    }

    public static function define_horacheia_uhbc() {
        $hora_cheia_bc = 0;
        return "{$hora_cheia_bc}";
    }

    public static function busca_ftp_uhbc() {


        $arquivouhbc = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHBC/pchbrc.txt", "r");
        $cont = 0;
        $arrayuhbc = array('data' => '', 'hora' => '', 'cota' => '', 'jus' => '', 'aflu' => '', 'turb' => '',
            'vert' => '', 'defl' => '', 'trans' => '', 'outra' => '', 'chuva' => '', 'inde1' => '', 'inde2' => '');
        while (!feof($arquivouhbc)) {
            $linha = fgets($arquivouhbc, 4096);
            $arrayuhbc['data'] = substr($linha, 0, 8);
            $arrayuhbc['hora'] = substr($linha, 8, 6);
            $arrayuhbc['cota'] = substr($linha, 16, 8);
            $arrayuhbc['jus'] = substr($linha, 24, 8);
            $arrayuhbc['aflu'] = substr($linha, 32, 7);
            $arrayuhbc['turb'] = substr($linha, 39, 7);
            $arrayuhbc['vert'] = substr($linha, 46, 7);
            $arrayuhbc['defl'] = substr($linha, 53, 7);
            $cont++;
        }

       
    }

}
