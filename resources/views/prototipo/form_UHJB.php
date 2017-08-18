<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Multi Usinas HidroCalc  - UHJB</title>
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
                <form >
                    <!--Inicio Formulário --> 
                    <div class="row">
                        <div class="col-md-4">
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
                            <!--Níveis -->
                            <div  >
                                <div class="form-group">
                                    <label>Nível Montante(m):</label>
                                    <input type="text" name="multi[nivel_montante]" placeholder="771,50m" size="10" />
                                </div>
                                <div class="form-group">
                                    <label>Nível Jusante (m):</label>
                                    <input type="text" name="multi[nivel_jusante]" placeholder="735,00m" size="10" />
                                </div>
                            </div>
                        </div>
                        <!--Geração -->
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4" >
                                    <p><b>Unidade Geradora 01</b></p>
                                    <div class="form-group">
                                        <label>Geração UG1 Mwh:</label>
                                        <input type="text" name="multi[geracao_ug1]" placeholder="6,33" size="10"/>
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
                                <div class="col-md-4">
                                    <p><b>Unidade Geradora 02</b> </p>
                                    <div class="form-group">
                                        <label>Geração UG2 Mwh:</label>
                                        <input type="text" name="multi[geracao_ug2]" placeholder="6,33" size="10" />
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
                                <div class="col-md-4">
                                    <p><b>Unidade Geradora 02</b> </p>
                                    <div class="form-group">
                                        <label>Geração UG2 Mwh:</label>
                                        <input type="text" name="multi[geracao_ug2]" placeholder="6,33" size="10" />
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
                    </div>
                    <hr>                  
                </form>                
                <!--Final Formulario -->
                <!--Valores -->
               <div id ="list">
    <div id="conteudo">
        <?php $arquivouhjb = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHJB/pchjb.txt", "r"); ?>
        <?php
        if (!$arquivouhjb) {
            ;
            ?>
            <p>Não é possivel abrir o arquivo para leitura</p>
            <?php exit; ?>
        <?php }; ?>
        <table class="table table-hover">
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
                    $arrayuhjb['trans'] = substr($linha, 60, 7);
                    $arrayuhjb['outra'] = substr($linha, 67, 7);
                    $arrayuhjb['chuva'] = substr($linha, 74, 7);
                    $arrayuhjb['inde1'] = substr($linha, 81, 3);
                    $arrayuhjb['inde2'] = substr($linha, 85, 3);
                    ?> 
                    <tr>
                        <td> <?php echo $arrayuhjb['data']; ?></td>
                        <td> <?php echo $arrayuhjb['hora']; ?></td>
                        <td> <?php echo $arrayuhjb['cota']; ?></td>
                        <td> <?php echo $arrayuhjb['jus']; ?></td>
                        <td> <?php echo $arrayuhjb['aflu']; ?></td>
                        <td> <?php echo $arrayuhjb['turb']; ?></td>
                        <td> <?php echo $arrayuhjb['vert']; ?></td>
                        <td><?php echo $arrayuhjb['defl']; ?></td>
                        <td> <?php echo $arrayuhjb['trans']; ?></td>
                        <td> <?php echo $arrayuhjb['outra']; ?></td>
                        <td> <?php echo $arrayuhjb['chuva']; ?></td>
                        <td> <?php echo $arrayuhjb['inde1']; ?></td>
                        <td> <?php echo $arrayuhjb['inde2']; ?></td>
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
        <?php fclose($arquivouhjb); ?> 
    </div>
</div>
            </div>
        </div>     
        <hr>
    </body>
</html>