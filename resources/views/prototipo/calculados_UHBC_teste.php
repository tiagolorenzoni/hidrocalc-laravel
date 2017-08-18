<?php

$cont = 0;


$arquivouhbc = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHBC/pchbrc.txt ", "r");



while (!feof($arquivouhbc)) {
    $linha = fgets($arquivouhbc, 4096);
    for ($x = 0; $x <= 47; $x++) {        
    $cont++;
        $array2[$x]= array ($array1 = array(
            'data' => substr($linha, 0, 8),
            'hora' => substr($linha, 8, 6),
            'cota' => substr($linha, 16, 8),
            'jus' => substr($linha, 24, 8)));
        
            
    };    
        //echo $array1['data'];
       // echo $array1['hora'];        
                       
}
fclose($arquivouhbc);

    for ($x = 0; $x <= 47; $x++) {        

       echo var_dump($array2[$x]);
      // echo $x;
            
    };