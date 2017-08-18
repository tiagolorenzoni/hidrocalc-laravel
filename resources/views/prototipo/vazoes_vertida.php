<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Multi Usinas HidroCalc - Vazão Vertida </title>
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
                <!--Valores -->
                <?php require_once 'Utils.class.php'; ?>
                <div id ="list">
                    <!--Definiço da Aba Uhbc -->
                    <div id="conteudo">
                        <table class="table table-bordered">
                         <!--   <table class="table table-striped">-->
                            <thead>  
                                <tr class="info">
                                    <th ><a href="calculos.php">Data</a></th> 
                                    <th >Hora</th> 
                                    <th >C1</th>                      
                                    <th >C2</th> 
                                    <th >C3</th> 
                                    <th >C4</th> 
                                    <th >C5</th> 
                                    <th >C6</th> 
                                    <th >Basculante</th> 
                                    <th >Total</th>
                                </tr>
                            </thead > 
                            <tbody>
                                <tr>
                                    <td>&DDotrahd;</td>
                                    <td>&DDotrahd;</td>
                                    <td>&DDotrahd; </td>
                                    <td>&DDotrahd; </td>
                                    <td>&DDotrahd; </td>
                                    <td>&DDotrahd; </td>
                                    <td>&DDotrahd; </td>
                                    <td>&DDotrahd; </td>
                                    <td>&DDotrahd; </td>
                                    <td>&DDotrahd; </td>
                                </tr>
                            </tbody>                       
                        </table>
                    </div>
                    <!--fim-->            
                </div>

            </div>
        </div>     
        <hr>
    </body>
</html>
