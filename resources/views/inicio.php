<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title>Multi Usinas HidroCalc!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />     
        <link href="<?= asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('js/jquery.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">HIDROCALC</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid text-center">    
            <div class="row content">
                <div class="col-sm-2 sidenav">
                    <p><a href="Aba_UHBC">Aba UHBC</a></p>                    
                    <p><a href="Leituras_UHBC">Leituras UHBC</a></p>
                    <p><a href="Formulario_UHBC">Formulário UHBC</a></p>
                    <p><a href="Graficos">Gráficos</a></p>
                    <p><a href="UHBC/cota_uhbc">UHBC cota</a></p>
                    
                </div>
                <div class="col-sm-8 text-left"> 
                    <h3>Protótipo de Telas do HidroCalc</h3>
                    <p>Trabalho de Elaboração de ET para contratação de Aplicativo Hidrocalc - Balanço Hídrico de Reservatório</p>
                </div>
            </div><!--/row-->
        </div>
        <hr>

        <footer>
            <p>&copy; 2017 Protótipo.</p>
        </footer>


    </body>
</html>
