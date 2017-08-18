<?php

//require_once 'Define.php';

/**
 * Miscellaneous utility methods. Alteracao 18/08/2014
 */
final class Utils {

    private function __construct() {
        
    }

    /**
     * Format date.
     * @param DateTime $date date to be formatted
     * @return string formatted date
     */
    public static function formatDate(DateTime $date = null) {
        if ($date === null) {
            return '';
        }
        return $date->format('d/m/Y');
    }

    /**
     * Format date and time.
     * @param DateTime $date date to be formatted
     * @return string formatted date and time
     */
    public static function formatDateTime(DateTime $date = null) {
        if ($date === null) {
            return '';
        }
        return $date->format('d/m/Y H:i');
    }

    /**
     * Capitalize the first letter of the given string
     * @param string $string string to be capitalized
     * @return string capitalized string
     */
    public static function capitalize($string) {
        return ucfirst(mb_strtolower($string));
    }

    /**
     * Escape the given string
     * @param string $string string to be escaped
     * @return string escaped string
     */
    public static function escape($string) {
        return htmlspecialchars($string, ENT_QUOTES);
    }

    /*
     * método conv_data_to_us()
     * Converte uma data para o formato yyyy-mm-dd
     * @param $data = data no formato dd/mm/yyyy
     */

    public static function conv_data_to_us($data) {
        $dia = substr($data, 0, 2);
        $mes = substr($data, 3, 2);
        $ano = substr($data, 6, 4);
        return "{$ano}-{$mes}-{$dia}";
    }

    /*
     * método conv_data_to_br()
     * Converte uma data para o formato dd/mm/yyyy
     * @param $data = data no formato yyyy-mm-dd
     */

    public static function conv_data_to_br($data) {
        // captura as partes da data
        $ano = substr($data, 0, 4);
        $mes = substr($data, 4, 2);
        $dia = substr($data, 6, 2);

        // retorna a data resultante
        return "{$dia}/{$mes}/{$ano}";
    }

    public static function conectado() {
        new TSession;
        if (!TSession::getValue('counted')) {
            TSession::freeSession();
            header("location: index.php");
        }
    }

    public static function define_percentual_uhbc($cota) {
        // 

        switch ($cota) {
            case ($cota < 193.0 ):
                $percent_bc = 0;
                break;
            case ($cota >= 193.0 && $cota <= 193.5 ):
                $percent_bc = 25;
                break;
            case ($cota > 193.5 && $cota <= 194 ):
                $percent_bc = 50;
                break;
            case ($cota > 194 && $cota < 194.5 ):
                $percent_bc = 75;
                break;
            case ($cota > 194.5 && $cota < 195 ):
                $percent_bc = 75;
                break;                       
            case ($cota >= 195 ):
                $percent_bc = 100;
                break;
        }
        return "{$percent_bc}";
    }

    public static function define_percentual_uhjb($cota) {
        switch ($cota) {
            case ($cota <= 770.50 ):
                $percent_jb = 0;
                break;
            case ($cota > 770.50 && $cota < 770.60 ):
                $percent_jb = 10;
                break;
            case ($cota >= 770.60 && $cota < 770.70 ):
                $percent_jb = 20;
                break;
            case ($cota >= 770.70 && $cota < 770.80 ):
                $percent_jb = 30;
                break;
            case ($cota >= 770.80 && $cota < 770.90 ):
                $percent_jb = 40;
                break;
            case ($cota >= 770.90 && $cota < 771.0 ):
                $percent_jb = 50;
                break;
            case ($cota >= 771.0 && $cota < 771.10 ):
                $percent_jb = 60;
                break;
            case ($cota >= 771.10 && $cota < 771.16 ):
                $percent_jb = 70;
                break;
            case ($cota >= 771.16 && $cota < 771.20 ):
                $percent_jb = 75;
                break;
            case ($cota >= 771.20 && $cota < 771.30 ):
                $percent_jb = 80;
                break;
            case ($cota >= 771.30 && $cota < 771.50 ):
                $percent_jb = 90;
                break;
            case ($cota >= 771.5 ):
                $percent_jb = 100;
                break;
        }
        return "{$percent_jb}";
    }

}
