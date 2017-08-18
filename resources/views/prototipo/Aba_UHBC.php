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
    <body class="content">
        <?php require_once 'Utils.class.php'; ?>
        <!-- Quadro principal -->
        <div class="container-fluid">   
            <div class="row">
                <div class="col-md-6"> <!--div esquerda-->
                    <div class="panel-heading" ><!--div Formulário -->                         
                        <h4>PCH Barra do Rio Chapéu</h4>
                        <form >
                            <a href="#" class="btn btn-default btn-md disabled" role="button">Novo</a>
                            <a href="#" class="btn btn-default btn-md disabled" role="button">Editar</a>
                            <a href="#" class="btn btn-default btn-md disabled" role="button">Salvar</a>                           
                            <!--Inicio Formulário --> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div >
                                        <!--Data e Hora-->   
                                        <p><b>Data e Hora</b></p>
                                        <div  >
                                            <div class="form-group">  
                                                <label><a href="index.php">Data:</a></label>
                                                <input type="text"  placeholder="18/04/2017" size="10">
                                            </div>
                                            <div class="form-group">   
                                                <label >Hora:</label>
                                                <input type="text" placeholder="16:00" size="10">
                                            </div> 
                                        </div>
                                        <hr>
                                        <div >
                                            <p><b>Unidade Geradora 01</b></p>
                                            <div class="form-group">
                                                <label>Geração UG1 Mwh:</label>
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
                                </div>
                                <!--Geração -->
                                <div class="col-md-6">

                                    <!--Níveis -->
                                    <p><b>Níveis</b></p>
                                    <div  >
                                        <div class="form-group">
                                            <label>Nível Montante(m):</label>
                                            <input type="text" name="multi[nivel_montante]" placeholder="195m" size="10" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nível Jusante (m):</label>
                                            <input type="text" name="multi[nivel_jusante]" placeholder="132m" size="10" />
                                        </div>
                                    </div>


                                    <hr>


                                    <div >
                                        <p><b>Unidade Geradora 02</b> </p>
                                        <div class="form-group">
                                            <label>Geração UG2 Mwh:</label>
                                            <input type="text" name="multi[geracao_ug2]" placeholder="7,50" size="10" />
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
                        <hr>  
                    </div> <!--div Formulário final--> 
                    <div><!--div dados --> 
                        <div class="col-md-6"><!--div dados--> 
                            <div id="conteudo">    
                                
                                <?php $dadosuhbc = fopen("arquivos/dadosuhbc.txt ", "r"); ?>
                                <?php
                                if (!$dadosuhbc) {
                                    ;
                                    ?>
                                    <p>Não é possivel abrir o arquivo para leitura</p>
                                    <?php exit; ?>
                                <?php }; ?>


                                <h4>Dados Preenchidos</h4>
                                <table class="table table-bordered">
                                    <thead>  
                                        <tr class="bg-primary" >
                                            <th >Data</th> 
                                            <th >Hora</th> 
                                            <th >Cota</th>                      
                                            <th >Jusante</th> 
                                            <th >Mwh UG1</th> 
                                            <th> Estado UG1</th> 
                                            <th >Mwh UG2</th> 
                                            <th> Estado UG2</th> 
                                            <th>Ação</th>
                                        </tr>
                                    </thead > 
                                    <tbody>
                                        <?php
                                        $arraybc = array('data' => '', 'hora' => '', 'cota' => '', 'jus' => '', 'aflu' => '', 'turb' => '', 'vert' => '', 'defl' => '','acao' => '');
                                        ?> 
                                        <?php
                                        while (!feof($dadosuhbc)) {
                                            $linha1 = fgets($dadosuhbc, 4096);
                                            $arraybc['data'] = substr($linha1, 0, 8);
                                            $arraybc['hora'] = substr($linha1, 8, 6);
                                            $arraybc['cota'] = substr($linha1, 16, 8);
                                            $arraybc['jus'] = substr($linha1, 24, 8);
                                            $arraybc['aflu'] = substr($linha1, 32, 7);
                                            $arraybc['turb'] = substr($linha1, 39, 7);
                                            $arraybc['vert'] = substr($linha1, 46, 7);
                                            $arraybc['defl'] = substr($linha1, 53, 12);
                                            $arraybc['acao'] = substr($linha1, 68, 8);
                                            ?> 
                                            <tr>    
                                                <td> <?php echo $converte = Utils::conv_data_to_br($arraybc['data']); ?></td> 
                                                <td> <?php echo $arraybc['hora']; ?></td>
                                                <td> <?php echo $arraybc['cota']; ?></td>
                                                <td> <?php echo $arraybc['jus']; ?></td>
                                                <td> <?php echo $arraybc['aflu']; ?></td>
                                                <td> <?php echo $arraybc['turb']; ?></td>
                                                <td> <?php echo $arraybc['vert']; ?></td>
                                                <td><?php echo $arraybc['defl']; ?></td>
                                                <td><a href="Aba_UHBC.php" ><?php echo $arraybc['acao']; ?></a></td>
                                                
                                            </tr>
                                        <?php }; ?> 
                                    </tbody>
                                </table>
                                <?php fclose($dadosuhbc); ?> 
                            </div>
                            <!--fim-->            
                        </div> <!--div dados-->
                    </div> <!--div dados -->   


                </div><!--div esquerda-->

                <div class="col-md-6"><!--div calculos--> 
                    <div id="conteudo">    
                        <h4>Dados Calculados - FTP</h4>
                        <?php $arquivouhbc = fopen("arquivos/calculadosuhbc.txt ", "r"); ?>
                        <?php
                        if (!$arquivouhbc) {
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
                                    <th>Afluência</th>                                     
                                    <th>Turbinado</th>                                    
                                    <th>Vertido</th> 
                                    <th>Defluência</th>
                                    
                                </tr>
                            </thead > 
                            <tbody>
                                <?php
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
                                    ?> 
                                    <tr>    
                                        <td> <?php echo $convertedata = Utils::conv_data_to_br($arrayuhbc['data']); ?></td>
                                        <td> <?php echo $arrayuhbc['hora']; ?></td>
                                        <td> <?php echo $arrayuhbc['cota']; ?></td>
                                        <td> <?php echo $arrayuhbc['jus']; ?></td>
                                        <td> <?php echo $arrayuhbc['aflu']; ?></td>
                                        <td> <?php echo $arrayuhbc['turb']; ?></td>
                                        <td> <?php echo $arrayuhbc['vert']; ?></td>
                                        <td><?php echo $arrayuhbc['defl']; ?></td>
                                    </tr>
                                <?php }; ?> 
                            </tbody>
                        </table>
                        <?php fclose($arquivouhbc); ?> 
                    </div>
                    <!--fim-->            
                </div> <!--div calculos-->  

            </div>     
        </div> 
    </body>
</html>
