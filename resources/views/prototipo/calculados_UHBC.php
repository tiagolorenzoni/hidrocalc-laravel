<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Multi Usinas HidroCalc - UHBC </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="hidrologia, eletrosul" />
        <meta name="description" content="Prototipo" />
        <link rel="stylesheet" href="css/estilos.css" type="text/css" />
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <hr>
        <?php require_once 'Utils.class.php'; ?>
        <?php require_once 'Utils_uhbc.class.php'; ?>       
        <!-- Quadro principal -->
        <div class="container-fluid">
            <div ><!--div calculos--> 
                <!--Definiço da Aba Uhbc -->
                <div id="conteudo">
                    <?php $arquivouhbc = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHBC/pchbrc.txt", "r"); ?>
                    <?php
                    if (!$arquivouhbc) {
                        ;
                        ?>
                        <p>Não é possivel abrir o arquivo para leitura</p>
                        <?php exit; ?>
                    <?php }; ?>
                    <table class="table table-bordered">
                        <thead>
                            </tr>
                            <tr class="info">
                                <th>Data</th> 
                                <th>Hora</th> 
                                <th>Nível Montante (m)</th>                      
                                <th>Nível Jusante (m)</th>
                                <th>Queda Bruta (m)</th>
                                <th>Vazão Afluente (m³/s)</th>
                                <th>Vazão Vertida (m³/s)</th>                               
                                <th>Vazão Turbinada (m³/s)</th>                                    
                                <th>Vazão Defluente (m³/s)</th>                                   
                                <th>Vazão  Afluênte Referência (m³/s)</th>
                                <th>Vazão  Acumulada (m³/s)</th>
                                <th>Estado Hidráulico Reservatório</th>
                                <th>Volume acumulado (hm³)</th>
                                <th>Percentual Volume Ùtil</th>                                 
                            </tr>
                        </thead > 
                        <tbody>
                            <?php
                            $cont = 0;
                            $arrayuhbc = array('data' => '', 'hora' => '', 'cota' => '', 'jus' => '', 'aflu' => '', 'turb' => '',
                                'vert' => '', 'defl' => '', 'trans' => '', 'outra' => '', 'chuva' => '', 'inde1' => '', 'inde2' => '');
                            ?> 
                            <?php
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
                                ?> 
                                <?php
                                foreach ($arrayuhbc as $value) {
                                    $array48 = array($value);
                                };
                                ?> 
                                <tr>    
                                    <td> <?php echo $convertedata = Utils::conv_data_to_br($arrayuhbc['data']); ?></td>
                                    <td> <?php echo $arrayuhbc['hora']; ?></td>
                                    <td> <?php echo (float) $arrayuhbc['cota']; ?></td>
                                    <td> <?php echo(float) $arrayuhbc['jus']; ?></td>
                                    <td><?php echo (float) $arrayuhbc['cota'] - $arrayuhbc['jus']; ?></td>
                                    <td> <?php echo (float) $arrayuhbc['aflu']; ?></td>                                        
                                    <td> <?php echo (float) $arrayuhbc['vert']; ?></td>
                                    <td> <?php echo (float) $arrayuhbc['turb']; ?></td>                                       
                                    <td><?php echo (float) $arrayuhbc['defl']; ?></td>
                                    <td><?php echo (float) $arrayuhbc['aflu']; ?></td>
                                    <td><?php echo (float) $arrayuhbc['aflu'] - $arrayuhbc['defl']; ?> </td>
                                    <td class="alert-success" >Normal</td>
                                    <td><?php echo $volume = (string) Utils_uhbc::busca_volume_total($arrayuhbc['cota']); ?></td>
                                    <td> <?php echo $volumeutil = (float) Utils_uhbc::busca_volume($arrayuhbc['cota']); ?></td>
                                </tr>
<?php }; ?> 
                        </tbody>                    
                    </table>
<?php fclose($arquivouhbc); ?> 
                </div>
                <!--fim-->            
            </div> <!--div calculos-->  
        </div> 
    </body>
</html>
