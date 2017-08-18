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
        
          <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand icon-bar" href="index.php">HIDROCALC</a>
                </div>
            </div>
        </nav>
        
        <?php require_once 'Utils.class.php'; ?>
        <?php require_once 'Utils_uhbc.class.php'; ?>       
        <div class="container-fluid">

            <div class="panel panel-default">
                <div class="panel-body">
                    <span class="badge" >PCH Barra do Rio Chapéu</span>
                    <a href="#" class="btn btn-default btn-lg" role="button">Novo</a>
                    <a href="#" class="btn btn-default btn-lg disabled" role="button">Editar</a>
                    <a href="#" class="btn btn-default btn-lg disabled" role="button">Salvar</a>
                </div>
                <div class="panel-footer">            <!-- Quadro principal -->
                    <div>
                        <form >
                            <!--Inicio Formulário --> 
                            <div class="row">
                                <div class="col-sm-3">
                                    <!--Data e Hora-->                       
                                    <div >
                                        <div class="form-group">
                                            <label><a href="index.php">Data:</a></label>
                                            <input type="text"  placeholder="18/04/2017" size="10">
                                        </div>
                                        <div class="form-group">
                                            <label >Hora:</label>
                                            <input type="text" placeholder="16:00" size="10">
                                        </div>
                                    </div> 
                                </div>                                                                
                                   <!--Níveis -->
                                    <div class="col-sm-3" >
                                        <div class="form-group">
                                            <label>Nível Montante(m):</label>
                                            <input type="text" name="multi[nivel_montante]" placeholder="195.0" size="10" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nível Jusante (m):</label>
                                            <input type="text" name="multi[nivel_jusante]" placeholder="132.0" size="10" />
                                        </div>
                                    </div>                                                              
                                <!--Geração -->
                                <div class="col-sm-3">
                                    <div >
                                        <div class="form-group">
                                            <label>Geração UG1 MWh:</label>
                                            <input type="text" name="multi[geracao_ug1]" placeholder="7,50" size="10"/>
                                        </div>
                                        <div class="form-group">                           
                                            <label>Estado UG1:</label>
                                            <select name="multi[estadoug1]">
                                                <option>Gerando</option>
                                                <option>Parada</option>
                                                <option>SNL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div >
                                        <div class="form-group">
                                            <label>Geração UG2 MWh:</label>
                                            <input type="text" name="multi[geracao_ug2]" placeholder="7,5" size="10" />
                                        </div>
                                        <div class="form-group">
                                            <label>Estado UG2:</label>
                                            <select name="multi[estadoug2]">                                   
                                                <option>Gerando</option>
                                                <option>Parada</option>
                                                <option>SNL</option>
                                            </select>
                                        </div> 
                                    </div> 
                                </div>
                            </div>               
                        </form> 
                    </div> </div>
            </div> 


            <!--Final Formulario -->
            <!--Valores -->
            <div ><!--div calculos--> 
                <!--Definiço da Aba Uhbc -->
                <div>
                    <?php $arquivouhbc = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHBC/pchbrc.txt", "r"); ?>
                    <?php
                    if (!$arquivouhbc) {
                        ;
                        ?>
                        <p>Não é possivel abrir o arquivo para leitura</p>
                        <?php exit; ?>
                    <?php }; ?>
                    <table class="table table-responsive table-bordered">
                        <thead class="bg-primary" style="font-family: serif">
                            </tr>
                            <tr >
                                <th>Data</th> 
                                <th>Hora</th> 
                                <th>Nível Montante (m)</th>                      
                                <th>Nível Jusante (m)</th>
                                <th>UG1</th>
                                <th>Estado UG1</th>
                                <th>UG2</th>
                                <th>Estado UG2</th>
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
                        <tbody style="font-family: calibri">
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
                                <tr class="">    
                                    <td class="alert-info top"> <?php echo $convertedata = Utils::conv_data_to_br($arrayuhbc['data']); ?></td>
                                    <td class="alert-info"> <?php echo $arrayuhbc['hora']; ?></td>
                                    <td class="alert-info"> <?php echo (float) $arrayuhbc['cota']; ?></td>
                                    <td class="alert-info"> <?php echo(float) $arrayuhbc['jus']; ?></td>
                                    <td class="alert-info" >7.5</td>
                                    <td class="alert-info" >Gerando</td>
                                    <td class="alert-info" >7.5</td>
                                    <td class="alert-info" >Gerando</td>
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
        <hr>
    </body>
</html>
