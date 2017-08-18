<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Multi Usinas HidroCalc - UHJB </title>
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
        <?php require_once 'Utils.class.php'; ?>
        <!-- Quadro principal -->
        <div class="container-fluid">   
            <div>
                <div ><!--div calculos--> 
                    <div id="conteudo">    
                        <h4><a href="index.php">Dados Calculados UHJB</a></h4>
                        <?php $arquivouhjb = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHJB/pchjb.txt ", "r"); ?>
                        <?php
                        if (!$arquivouhjb) {
                            ;
                            ?>
                            <p>Não é possivel abrir o arquivo para leitura</p>
                            <?php exit; ?>
                        <?php }; ?>

                        <table class="table table-bordered">
                            <thead>  
                                <tr class="info">
                                    <th>Data </th> 
                                    <th>Hora </th> 
                                    <th>Cota</th>                      
                                    <th>Jusante</th>
                                    <th>Queda(m)</th>
                                    <th>Vertida</th>                               
                                    <th>Turbinada</th>                                    
                                    <th>Defluente</th> 
                                    <th>Afluente</th>
                                    <th>Afl. Ref.</th>
                                    <th>Acumulada</th>
                                    <th>Estado</th>
                                    <th>Vol</th>
                                    <th>Ùtil</th>
                                    
                                </tr>
                            </thead > 
                            <tbody>
                                <?php
                                $arrayuhjb = array('data' => '', 'hora' => '', 'cota' => '', 'jus' => '', 'aflu' => '', 'turb' => '',
                                    'vert' => '', 'defl' => '', 'trans' => '', 'outra' => '', 'chuva' => '', 'inde1' => '', 'inde2' => '');
                                ?> 
                                <?php
                                while (!feof($arquivouhjb)) {
                                    $linha = fgets($arquivouhjb, 4096);
                                    $arrayuhjb['data'] = substr($linha, 0, 8);
                                    $arrayuhjb['hora'] = substr($linha, 8, 6);
                                    $arrayuhjb['cota'] = substr($linha, 16, 8);
                                    $arrayuhjb['jus'] = substr($linha, 24, 8);
                                    $arrayuhjb['aflu'] = substr($linha, 32, 7);
                                    $arrayuhjb['turb'] = substr($linha, 39, 7);
                                    $arrayuhjb['vert'] = substr($linha, 46, 7);
                                    $arrayuhjb['defl'] = substr($linha, 53, 7);
                                    ?> 
                                    <tr>    
                                        <td> <?php echo $convertedata = Utils::conv_data_to_br($arrayuhjb['data']); ?></td>
                                        <td> <?php echo $arrayuhjb['hora']; ?></td>
                                        <td> <?php echo $arrayuhjb['cota']; ?></td>
                                        <td> <?php echo $arrayuhjb['jus']; ?></td>
                                        <td><?php echo $arrayuhjb['cota']-$arrayuhjb['jus']; ?></td>
                                        <td> <?php echo $arrayuhjb['vert']; ?></td>
                                        <td> <?php echo $arrayuhjb['turb']; ?></td>                                       
                                        <td><?php echo $arrayuhjb['defl']; ?></td>
                                        <td> <?php echo $arrayuhjb['aflu']; ?></td>
                                        <td><?php echo $arrayuhjb['aflu']; ?></td>
                                        <td>  <?php echo $arrayuhjb['aflu']- $arrayuhjb['defl']; ?>       </td>
                                        <td style="background-color: greenyellow"><b>Normal</b></td>
                                        <td>23</td>
                                        <td> <?php echo $volumeutil = Utils::define_percentual_uhjb($arrayuhjb['cota']); ?></td>
                                    </tr>
                                <?php }; ?> 
                            </tbody>
                        </table>
                        <?php fclose($arquivouhjb); ?> 
                    </di
                    <!--fim-->            
                </div> <!--div calculos-->  

            </div>     
        </div> 
    </body>
</html>
