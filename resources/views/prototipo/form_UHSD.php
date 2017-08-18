<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Multi Usinas HidroCalc - UHSD</title>
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
                                    <input type="text" name="multi[nivel_montante]" placeholder="345,00m" size="10" />
                                </div>
                                <div class="form-group">
                                    <label>Nível Jusante (m):</label>
                                    <input type="text" name="multi[nivel_jusante]" placeholder="310,50m" size="10" />
                                </div>
                            </div>
                        </div>
                        <!--Geração -->
                        <div class="col-md-4">
                            <div >
                                <p><b>Unidade Geradora 01</b></p>
                                <div class="form-group">
                                    <label>Geração UG1 Mwh:</label>
                                    <input type="text" name="multi[geracao_ug2]" placeholder="24,00" size="10"/>
                                </div>
                                <div class="form-group">                           
                                    <label>Estado UG1:</label>
                                    <select name="multi[estadoug2]">
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
                                    <input type="text" name="multi[geracao_ug1]" placeholder="24,00" size="10" />
                                </div>
                                <div class="form-group">
                                    <label>Estado UG2:</label>
                                    <select name="multi[estadoug1]">                                   
                                        <option>Gerando</option>
                                        <option>Parada</option>
                                        <option>SNL</option>
                                    </select>
                                </div> 
                            </div> 
                        </div>
                    </div>                 
                    <!--Comportas -->
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Comportas</p>
                                <table class="table-responsive">
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td width="40"><div align="center">C1</div></td>
                                        <td width="40"><div align="center">C2</div></td>
                                    </tr>                                                               
                                    <tr>
                                        <td> <label >Aberturas (m):</label></td>
                                        <td>
                                            <div align="center">                                           
                                                <input type="text" name="multi[comporta1]"    size='5' placeholder="0,0" />
                                            </div></td>
                                        <td>
                                            <div align="center">                                          
                                                <input type="text" name="multi[comporta2]"    size='5' placeholder="0,0" />
                                            </div>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td><label >Lâmina livre:</label></td>
                                        <td> 
                                            <div align="center">
                                                <input name="cheklivrec1" type="checkbox" id="cheklivrec1">          
                                            </div></td>
                                        <td><div align="center">
                                                <input name="cheklivrec2" type="checkbox" id="cheklivrec2">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>


                            <div class="col-md-4">
                                <div >
                                    <p>Indexadores de Vazões</p>
                                    <div class="form-group">
                                        <label>Vazão Vertida:</label>
                                        <select name="multi[indexador_vazao_vertida]">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Outras estruturas:</label>
                                        <select name="multi[indexador_vazao_outras]">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select> 
                                    </div> 
                                </div> 
                            </div>


                        </div>
                    </div>
                </form>                
                <!--Final Formulario -->
                <!--Valores -->
                <div id ="list">
                    <div id="conteudo">
                        <?php $arquivouhsd = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHSD/uhsd.txt", "r"); ?>
                        <?php
                        if (!$arquivouhsd) {
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
                                $arrayuhsd = array('data' => '', 'hora' => '', 'cota' => '', 'jus' => '', 'aflu' => '', 'turb' => '',
                                    'vert' => '', 'defl' => '', 'trans' => '', 'outra' => '', 'chuva' => '', 'inde1' => '', 'inde2' => '');
                                ?> 
                                <?php
                                while (!feof($arquivouhsd)) {
                                    $linha = fgets($arquivouhsd, 4096);
                                    $arrayuhsd['data'] = substr($linha, 0, 8);
                                    $arrayuhsd['hora'] = substr($linha, 8, 6);
                                    $arrayuhsd['cota'] = substr($linha, 16, 8);
                                    $arrayuhsd['jus'] = substr($linha, 24, 8);
                                    $arrayuhsd['aflu'] = substr($linha, 32, 7);
                                    $arrayuhsd['turb'] = substr($linha, 39, 7);
                                    $arrayuhsd['vert'] = substr($linha, 46, 7);
                                    $arrayuhsd['defl'] = substr($linha, 53, 7);
                                    $arrayuhsd['trans'] = substr($linha, 60, 7);
                                    $arrayuhsd['outra'] = substr($linha, 67, 7);
                                    $arrayuhsd['chuva'] = substr($linha, 74, 7);
                                    $arrayuhsd['inde1'] = substr($linha, 81, 3);
                                    $arrayuhsd['inde2'] = substr($linha, 85, 3);
                                    ?> 
                                    <tr>
                                        <td> <?php echo $arrayuhsd['data']; ?></td>
                                        <td> <?php echo $arrayuhsd['hora']; ?></td>
                                        <td> <?php echo $arrayuhsd['cota']; ?></td>
                                        <td> <?php echo $arrayuhsd['jus']; ?></td>
                                        <td> <?php echo $arrayuhsd['aflu']; ?></td>
                                        <td> <?php echo $arrayuhsd['turb']; ?></td>
                                        <td> <?php echo $arrayuhsd['vert']; ?></td>
                                        <td><?php echo $arrayuhsd['defl']; ?></td>
                                        <td> <?php echo $arrayuhsd['trans']; ?></td>
                                        <td> <?php echo $arrayuhsd['outra']; ?></td>
                                        <td> <?php echo $arrayuhsd['chuva']; ?></td>
                                        <td> <?php echo $arrayuhsd['inde1']; ?></td>
                                        <td> <?php echo $arrayuhsd['inde2']; ?></td>
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
                        <?php fclose($arquivouhsd); ?> 
                    </div>
                </div>
            </div>
        </div>     
        <hr>
    </body>
</html>
