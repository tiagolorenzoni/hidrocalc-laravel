<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Multi Usinas HidroCalc - UHBC </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="language" content="pt-BR" />
        <meta name="keywords" content="hidrologia, eletrosul" />
        <meta name="description" content="Prototipo" />
        <meta name="Tiago Lorenzoni" content="" />
        <meta name="copyright" content="(c) 2017 " />
        <link rel="stylesheet" href="css/estilos.css" type="text/css" />
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <hr>
        <!-- Quadro principal -->
        <div >
            <div class="container">   

                <!--Final Formulario -->
                <!--Valores -->
                <h1>Leitura FTP de UHPJ</h1>
                <div id ="list">
                    <div id="conteudo">
                        <?php $arquivouhpj = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHPJ/uhpj.txt", "r"); ?>
                        <?php
                        if (!$arquivouhpj) {
                        ;
                        ?>
                        <p>Não é possivel abrir o arquivo para leitura</p>
                        <?php exit; ?>
                        <?php }; ?>
                        <table class="table">
                            <thead>  
                                <tr >
                                    <th>Data </th> 
                                    <th>Hora </th> 
                                    <th>Cota Montante (m) </th>                      
                                    <th>Cota Jusante (m) </th> 
                                    <th>Afluência (m³/s) </th> 
                                    <th>Turbinado (m³/s) </th> 
                                    <th>Vertido (m³/s) </th> 
                                    <th>Defluência (m³/s) </th> 
                                    <th>T. </th> 
                                    <th>O. </th> 
                                    <th>Chuva </th>
                                    <th>X </th>
                                    <th>Y </th>
                                </tr>
                            </thead > 
                            <tbody>
                                <?php
                                $arrayuhpj = array('data' => '', 'hora' => '', 'cota' => '', 'jus' => '', 'aflu' => '', 'turb' => '',
                                'vert' => '', 'defl' => '', 'trans' => '', 'outra' => '', 'chuva' => '', 'inde1' => '', 'inde2' => '');
                                ?> 
                                <?php
                                while (!feof($arquivouhpj)) {
                                $linha = fgets($arquivouhpj, 4096);
                                $arrayuhpj['data'] = substr($linha, 0, 8);
                                $arrayuhpj['hora'] = substr($linha, 8, 6);
                                $arrayuhpj['cota'] = substr($linha, 16, 8);
                                $arrayuhpj['jus'] = substr($linha, 24, 8);
                                $arrayuhpj['aflu'] = substr($linha, 32, 7);
                                $arrayuhpj['turb'] = substr($linha, 39, 7);
                                $arrayuhpj['vert'] = substr($linha, 46, 7);
                                $arrayuhpj['defl'] = substr($linha, 53, 7);
                                $arrayuhpj['trans'] = substr($linha, 60, 7);
                                $arrayuhpj['outra'] = substr($linha, 67, 7);
                                $arrayuhpj['chuva'] = substr($linha, 74, 7);
                                $arrayuhpj['inde1'] = substr($linha, 81, 3);
                                $arrayuhpj['inde2'] = substr($linha, 85, 3);
                                ?> 
                                <tr>
                                    <td> <?php echo
                                    $desligamento = Utils::conv_data_to_br($arrayuhpj['data']);         
                                    ?></td>
                                    <td> <?php echo $arrayuhpj['hora']; ?></td>
                                    <td> <?php echo $arrayuhpj['cota']; ?></td>
                                    <td> <?php echo $arrayuhpj['jus']; ?></td>
                                    <td> <?php echo $arrayuhpj['aflu']; ?></td>
                                    <td> <?php echo $arrayuhpj['turb']; ?></td>
                                    <td> <?php echo $arrayuhpj['vert']; ?></td>
                                    <td><?php echo $arrayuhpj['defl']; ?></td>
                                    <td> <?php echo $arrayuhpj['trans']; ?></td>
                                    <td> <?php echo $arrayuhpj['outra']; ?></td>
                                    <td> <?php echo $arrayuhpj['chuva']; ?></td>
                                    <td> <?php echo $arrayuhpj['inde1']; ?></td>
                                    <td> <?php echo $arrayuhpj['inde2']; ?></td>
                                </tr>
                                <?php }; ?> 
                            </tbody>
                            <thead>  
                                <tr >
                                    <th>Data </th> 
                                    <th>Hora </th> 
                                    <th>Cota Montante (m) </th>                      
                                    <th>Cota Jusante (m) </th> 
                                    <th>Afluência (m³/s) </th> 
                                    <th>Turbinado (m³/s) </th> 
                                    <th>Vertido (m³/s) </th> 
                                    <th>Defluência (m³/s) </th> 
                                    <th>T. </th> 
                                    <th>O. </th> 
                                    <th>Chuva </th>
                                    <th>X </th>
                                    <th>Y </th>
                                </tr>
                            </thead>
                        </table>
                        <?php fclose($arquivouhpj); ?> 
                    </div>
                </div>
            </div>
        </div>     
        <hr>
    </body>
</html>
