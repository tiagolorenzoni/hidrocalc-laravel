<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Multi Usinas HidroCalc - UHBC </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="hidrologia, eletrosul" />
        <meta name="description" content="Prototipo" />
        <link href="<?= asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('js/jquery.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
    </head>
    <body>
        <hr>
        <!-- Quadro principal -->
        <div >
            <div class="container">   
                <!--Valores -->
                <?php require_once 'Utils.class.php'; ?>
                <div id ="list">
                    <!--Definiço da Aba Uhbc -->
                    <div id="conteudo">
                        <?php $arquivouhbc = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHBC/pchbrc.txt", "r"); ?>
                        <?php
                        $x = 0;
                        if (!$arquivouhbc) {
                            ;
                            ?>
                            <p>Não é possivel abrir o arquivo para leitura</p>
                            <?php exit; ?>
<?php }; ?>
                        <table class="table table-bordered">
                         <!--   <table class="table table-striped">-->

                            <thead>  
                                <tr class="info">
                                    <th ><a href="index.php">Data</a></th> 
                                    <th >Hora </th> 
                                    <th >Cota Montante (m) </th>                      
                                    <th >Cota Jusante (m) </th> 
                                    <th >Afluência (m³/s) </th> 
                                    <th >Turbinado (m³/s) </th> 
                                    <th ><a href="vazoes_vertida.php">Vertido (m³/s)</a></th> 
                                    <th >Defluência (m³/s) </th> 
                                    <th >T.</th> 
                                    <th >O.</th> 
                                    <th >Chuva </th>
                                    <th >X</th>
                                    <th >Y</th>
                                </tr>
                            </thead > 
                            <tbody>
                                <?php $arrayuhbc = array('data' => '', 'hora' => '', 'cota' => '', 'jus' => '', 'aflu' => '', 'turb' => '', 'vert' => '', 'defl' => '', 'trans' => '', 'outra' => '', 'chuva' => '', 'inde1' => '', 'inde2' => ''); ?> 
                                <?php
                                $arraydata = array('x' => '');
                                while (!feof($arquivouhbc)) {
                                    $linha = fgets($arquivouhbc, 4096);
                                    $arrayuhbc['data'] = substr($linha, 0, 8);
                                    $arraydata['x'] = $arrayuhbc['data'];
                                    $arrayuhbc['hora'] = substr($linha, 8, 6);
                                    $arrayuhbc['cota'] = substr($linha, 16, 8);
                                    $arrayuhbc['jus'] = substr($linha, 24, 8);
                                    $arrayuhbc['aflu'] = substr($linha, 32, 7);
                                    $arrayuhbc['turb'] = substr($linha, 39, 7);
                                    $arrayuhbc['vert'] = substr($linha, 46, 7);
                                    $arrayuhbc['defl'] = substr($linha, 53, 7);
                                    $arrayuhbc['trans'] = substr($linha, 60, 7);
                                    $arrayuhbc['outra'] = substr($linha, 67, 7);
                                    $arrayuhbc['chuva'] = substr($linha, 74, 7);
                                    $arrayuhbc['inde1'] = substr($linha, 81, 3);
                                    $arrayuhbc['inde2'] = substr($linha, 85, 3);
                                    $x++;
                                    ?> 
                                    <tr>
                                        <!--<td> <?php echo $arrayuhbc['data']; ?></td>-->
                                        <td> <?php echo $desligamento = Utils::conv_data_to_br($arrayuhbc['data']); ?></td> 
                                        <td> <?php echo $arrayuhbc['hora']; ?></td>
                                        <td> <?php echo $arrayuhbc['cota']; ?></td>
                                        <td> <?php echo $arrayuhbc['jus']; ?></td>
                                        <td> <?php echo $arrayuhbc['aflu']; ?></td>
                                        <td> <?php echo $arrayuhbc['turb']; ?></td>
                                        <td> <?php echo $arrayuhbc['vert']; ?></td>
                                        <td> <?php echo $arrayuhbc['defl']; ?></td>
                                        <td> <?php echo $arrayuhbc['trans']; ?></td>
                                        <td> <?php echo $arrayuhbc['outra']; ?></td>
                                        <td> <?php echo $arrayuhbc['chuva']; ?></td>
                                        <td> <?php echo $arrayuhbc['inde1']; ?></td>
                                        <td> <?php echo $arrayuhbc['inde2']; ?></td>
                                    </tr>
                        <?php }; ?> 
                            </tbody>                       
                        </table>
                        <?php //echo $x; 



                        echo var_dump($arraydata['x']);
                        ?>
                    </div>
                    <!--fim-->            
                </div>

            </div>
        </div>     
        <hr>
    </body>
</html>
