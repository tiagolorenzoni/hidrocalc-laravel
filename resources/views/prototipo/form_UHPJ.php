<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Multi Usinas HidroCalc  - UHPJ</title>
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
                                    <input type="text" name="multi[nivel_montante]" placeholder="128,35m" size="10" />
                                </div>
                                <div class="form-group">
                                    <label>Nível Jusante (m):</label>
                                    <input type="text" name="multi[nivel_jusante]" placeholder="100,00m" size="10" />
                                </div>
                            </div>
                        </div>
                        <!--Geração -->
                        <div class="col-md-4">
                            <div >
                                <p><b>Unidade Geradora 01</b></p>
                                <div class="form-group">
                                    <label>Geração UG1 Mwh:</label>
                                    <input type="text" name="multi[geracao_ug2]" placeholder="38,00" size="10"/>
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
                                    <input type="text" name="multi[geracao_ug1]" placeholder="38,00" size="10" />
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
                    <hr>                  
                    <!--Comportas -->
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-md-8">
                                <p>Comportas</p>
                                <table >
                                    <tr>
                                        <td width="*" >&nbsp;</td>
                                        <td colspan="6" ><label class="menor">Segmento</label></td>
                                        <td width="*" ><label class="menor">Basculante</label></td>
                                    </tr> 
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td width="40"><div align="center">C1</div></td>
                                        <td width="40"><div align="center">C2</div></td>
                                        <td width="40"><div align="center">C3</div></td>
                                        <td width="40"><div align="center">C4</div></td>
                                        <td width="40"><div align="center">C5</div></td>
                                        <td width="40"><div align="center">C6</div></td>
                                        <td>&nbsp;</td>
                                    </tr>                                                               
                                    <tr>
                                        <td> <label class="menor">Aberturas (m):</label></td>
                                        <td>
                                            <div align="center">                                           
                                                <input type="text" name="multi[comporta1]"    size='5' placeholder="0,0" />
                                            </div></td>
                                        <td>
                                            <div align="center">                                          
                                                <input type="text" name="multi[comporta2]"    size='5' placeholder="0,0" />
                                            </div>
                                        </td>
                                        <td><div align="center">
                                                <input type="text" name="multi[comporta3]"   size='5' placeholder="0,0" />
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <input type="text" name="multi[comporta4]"   size='5'   placeholder="0,0"/>
                                            </div>
                                        </td>
                                        <td><div align="center">
                                                <input type="text" name="multi[comporta5]"   size='5' placeholder="0,0" />
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <input type="text" name="multi[comporta6]"   size='5' placeholder="0,0" />
                                            </div>
                                        </td>
                                        <td align="center">
                                            <input type="text" name="multi[comportabasc]"  id="campobasc"  size='5' placeholder="0,0"/>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td><label class="menor">Lâmina livre:</label></td>
                                        <td> 
                                            <div align="center">
                                                <input name="cheklivrec1" type="checkbox" id="cheklivrec1">          
                                            </div></td>
                                        <td><div align="center">
                                                <input name="cheklivrec2" type="checkbox" id="cheklivrec2">
                                            </div>
                                        </td>
                                        <td> <div align="center">
                                                <input name="cheklivrec3" type="checkbox" id="cheklivrec3">
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <input name="cheklivrec4" type="checkbox" id="cheklivrec4">
                                            </div></td><td> <div align="center">
                                                <input name="cheklivrec5" type="checkbox" id="cheklivrec5">
                                            </div></td>
                                        <td><div align="center">
                                                <input name="cheklivrec6" type="checkbox" id="cheklivrec6">
                                            </div></td><td>&nbsp;</td>
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
                        <?php $arquivouhpj = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHPJ/uhpj.txt", "r"); ?>
                        <?php
                        if (!$arquivouhpj) {
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
                                    <td> <?php echo $arrayuhpj['data']; ?></td>
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
