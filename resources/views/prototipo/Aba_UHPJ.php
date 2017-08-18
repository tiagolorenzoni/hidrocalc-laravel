<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Multi Usinas HidroCalc - UHPJ </title>
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
        <!-- Quadro principal -->
        <div class="container">   
            <div class="row">
                <div class="col-lg-12"> <!--div esquerda-->
                    <div class="panel-heading" ><!--div Formulário -->                         
                        <h3>UHE Passo São João</h3>
                        <form >
                            <a href="#" class="btn btn-default btn-lg disabled" role="button">Novo</a>
                            <a href="#" class="btn btn-default btn-lg disabled" role="button">Editar</a>
                            <a href="#" class="btn btn-default btn-lg disabled" role="button">Salvar</a> 
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
                                                <input type="text" name="multi[geracao_ug1]" placeholder="38,00" size="10"/>
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
                                            <input type="text" name="multi[geracao_ug2]" placeholder="38,00" size="10" />
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
                               
                                <div class="col-md-6">
                                    <hr>
                                    <table >
                                        <tr>
                                            <td width="*" ><b>Comportas</b></td>
                                            <td colspan="6" ><label >Segmento</label></td>
                                            <td width="*" ><label class="menor">Basculante</label></td>
                                        </tr> 
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td width="30"><div align="center">C1</div></td>
                                            <td width="30"><div align="center">C2</div></td>
                                            <td width="30"><div align="center">C3</div></td>
                                            <td width="30"><div align="center">C4</div></td>
                                            <td width="30"><div align="center">C5</div></td>
                                            <td width="30"><div align="center">C6</div></td>
                                            <td>&nbsp;</td>
                                        </tr>                                                               
                                        <tr>
                                            <td> <label >Aberturas (m):</label></td>
                                            <td>
                                                <div align="center">                                           
                                                    <input type="text" name="multi[comporta1]"    size='3' placeholder="0,0" />
                                                </div></td>
                                            <td>
                                                <div align="center">                                          
                                                    <input type="text" name="multi[comporta2]"    size='3' placeholder="0,0" />
                                                </div>
                                            </td>
                                            <td><div align="center">
                                                    <input type="text" name="multi[comporta3]"   size='3' placeholder="0,0" />
                                                </div>
                                            </td>
                                            <td>
                                                <div align="center">
                                                    <input type="text" name="multi[comporta4]"   size='3'   placeholder="0,0"/>
                                                </div>
                                            </td>
                                            <td><div align="center">
                                                    <input type="text" name="multi[comporta5]"   size='3' placeholder="0,0" />
                                                </div>
                                            </td>
                                            <td>
                                                <div align="center">
                                                    <input type="text" name="multi[comporta6]"   size='3' placeholder="0,0" />
                                                </div>
                                            </td>
                                            <td align="center">
                                                <input type="text" name="multi[comportabasc]"  id="campobasc"  size='3' placeholder="0,0"/>
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
                            </div> 
                        </form>                         
                    </div> <!--div Formulário final--> 
                     <?php require_once 'Utils.class.php'; ?>
                    <div><!--div dados --> 
                        <div class="col-lg-12"><!--div dados--> 
                            <div id="conteudo">    
                        <h4><a href="index.php">Dados Calculados</a></h4>
                        <?php $arquivouhbc = fopen("ftp://uhpj:operadoruhpj@ftp.eletrosul.gov.br/hidrologia/UHBC/pchbrc.txt ", "r"); ?>
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
                                    <th>Queda(m)</th>
                                    <th><a href="vazoes_vertida.php">Vertida</a></th>                               
                                    <th><a href="vazoes_vertida.php">Turbinada</a></th>                                    
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
                                        <td><?php echo $arrayuhbc['cota']-$arrayuhbc['jus']; ?></td>
                                        <td> <?php echo $arrayuhbc['vert']; ?></td>
                                        <td> <?php echo $arrayuhbc['turb']; ?></td>                                       
                                        <td><?php echo $arrayuhbc['defl']; ?></td>
                                        <td> <?php echo $arrayuhbc['aflu']; ?></td>
                                        <td><?php echo $arrayuhbc['aflu']; ?></td>
                                        <td>  <?php echo $arrayuhbc['aflu']- $arrayuhbc['defl']; ?>       </td>
                                        <td style="background-color: greenyellow"><b>Normal</b></td>
                                        <td>1.9</td>
                                        <td> <?php echo $volumeutil = Utils::define_percentual_uhbc($arrayuhbc['cota']); ?></td>
                                    </tr>
                                <?php }; ?> 
                            </tbody>
                        </table>
                        <?php fclose($arquivouhbc); ?> 
                    </di
                    <!--fim-->            
                </div> <!--div calculos-->  
                            <!--fim-->            
                        </div> <!--div dados-->
                    </div> <!--div dados -->   


                </div><!--div esquerda-->



            </div>     
        </div> 
    </body>
</html>
