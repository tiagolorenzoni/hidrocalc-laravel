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
                                    <input type="text" name="multi[nivel_montante]" placeholder="195m" size="10" />
                                </div>
                                <div class="form-group">
                                    <label>Nível Jusante (m):</label>
                                    <input type="text" name="multi[nivel_jusante]" placeholder="132m" size="10" />
                                </div>
                            </div>
                        </div>
                        <!--Geração -->
                        <div class="col-md-4">
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
                        <div class="col-md-4">
                            <div >
                                <p><b>Unidade Geradora 02</b> </p>
                                <div class="form-group">
                                    <label>Geração UG2 Mwh:</label>
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
                    <hr>                  
                </form>                
                <!--Final Formulario -->
                <!--Valores -->
                <?php ?>
                <div id ="list">
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
                        <table class="table table-hover">
                            <thead>  
                                <tr >
                                    <th > Data </th> 
                                    <th >Hora </th> 
                                    <th >Cota Montante (m) </th>                      
                                    <th >Cota Jusante (m) </th> 
                                    <th >Afluência (m³/s) </th> 
                                    <th>Turbinado (m³/s) </th> 
                                    <th >Vertido (m³/s) </th> 
                                    <th >Defluência (m³/s) </th> 
                                    <th>T.</th> 
                                    <th>O.</th> 
                                    <th >Chuva </th>
                                    <th >X</th>
                                    <th >Y</th>
                                </tr>
                            </thead > 
                            <tbody>
                                <?php $arrayuhbc = array('data' => '', 'hora' => '', 'cota' => '', 'jus' => '', 'aflu' => '', 'turb' => '', 'vert' => '', 'defl' => '', 'trans' => '', 'outra' => '', 'chuva' => '', 'inde1' => '', 'inde2' => ''); ?> 
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
                                    $arrayuhbc['trans'] = substr($linha, 60, 7);
                                    $arrayuhbc['outra'] = substr($linha, 67, 7);
                                    $arrayuhbc['chuva'] = substr($linha, 74, 7);
                                    $arrayuhbc['inde1'] = substr($linha, 81, 3);
                                    $arrayuhbc['inde2'] = substr($linha, 85, 3);
                                    ?> 
                                    <tr>
                                        <td> <?php echo $arrayuhbc['data']; ?></td>
                                        <td> <?php echo $arrayuhbc['hora']; ?></td>
                                        <td> <?php echo $arrayuhbc['cota']; ?></td>
                                        <td> <?php echo $arrayuhbc['jus']; ?></td>
                                        <td> <?php echo $arrayuhbc['aflu']; ?></td>
                                        <td> <?php echo $arrayuhbc['turb']; ?></td>
                                        <td> <?php echo $arrayuhbc['vert']; ?></td>
                                        <td><?php echo $arrayuhbc['defl']; ?></td>
                                        <td> <?php echo $arrayuhbc['trans']; ?></td>
                                        <td> <?php echo $arrayuhbc['outra']; ?></td>
                                        <td> <?php echo $arrayuhbc['chuva']; ?></td>
                                        <td> <?php echo $arrayuhbc['inde1']; ?></td>
                                        <td> <?php echo $arrayuhbc['inde2']; ?></td>
                                    </tr>
                                <?php }; ?> 
                            </tbody>
                            <thead>  
                                <tr >
                                    <th > Data </th> 
                                    <th >Hora </th> 
                                    <th >Cota Montante (m) </th>                      
                                    <th >Cota Jusante (m) </th> 
                                    <th >Afluência (m³/s) </th> 
                                    <th >Turbinado (m³/s) </th> 
                                    <th >Vertido (m³/s) </th> 
                                    <th >Defluência (m³/s) </th> 
                                    <th >T. </th> 
                                    <th >O. </th> 
                                    <th >Chuva </th>
                                    <th > X</th>
                                    <th > Y</th>

                                </tr>              
                            </thead>                         
                        </table>
                        <?php fclose($arquivouhbc); ?> 
                    </div>
                    <!--fim-->            
                </div>

            </div>
        </div>     
        <hr>
    </body>
</html>
