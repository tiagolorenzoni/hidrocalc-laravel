@extends('layouts.dashboard')
@section('page_heading','HidroCalc')
@section('section')

<!-- /.row -->
<div class="col-sm-12">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-gear fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">1</div>
                            <div>UHBC</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Mais</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">2</div>
                            <div>UHJB</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Mais</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-clock-o fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">3</div>
                            <div>UHPJ</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Mais</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">4</div>
                            <div>UHSD</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Mais</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">

            @section ('pane2_panel_title', 'Responsive')
            @section ('pane2_panel_body')

            <!-- /.panel -->



            <ul class="timeline-title">
                <li>
                    <div class="timeline-badge primary"><i class="fa fa-gear fa-2x"> UHBC </i>
                    </div>
                    <div class="timeline-panel">
                        <div >
                            <table class="table timeline-body table-bordered">
                                <thead>
                                     <tr class="success">
                                    
                                        <th >Data</th> 
                                        <th >Hora</th> 
                                        <th >Nível</th>                      
                                        <th >Jusante</th>
                                        <th >Queda Bruta</th>
                                        <th>Afluência</th>                                     
                                        <th>Turbinado</th>                                    
                                        <th>Vertido</th> 
                                        <th>Defluência</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 25/06/17</td>
                                        <td> 10:00</td>
                                        <td> 194,48</td>
                                        <td> 132,5</td>
                                        <td> 61,98</td>
                                        <td> 14</td>
                                        <td> 2</td>
                                        <td> 24</td>
                                        <td> 26</td>
                                    </tr>
                                <td> 25/06/17</td>
                                <td> 09:00</td>
                                <td> 194,48</td>
                                <td> 132,5</td>
                                <td> 61,98</td>
                                <td> 14</td>
                                <td> 2</td>
                                <td> 24</td>
                                <td> 26</td>
                                </tr>
                                <tr>
                                    <td> 25/06/17</td>
                                    <td> 08:00</td>
                                    <td> 194,48</td>
                                    <td> 132,5</td>
                                    <td> 61,98</td>
                                    <td> 14</td>
                                    <td> 2</td>
                                    <td> 24</td>
                                    <td> 26</td>
                                </tr>
                                <tr>
                                    <td> 25/06/17</td>
                                    <td> 07:00</td>
                                    <td> 194,90</td>
                                    <td> 132,5</td>
                                    <td> 61,98</td>
                                    <td> 14</td>
                                    <td> 2</td>
                                    <td> 24</td>
                                    <td> 26</td>
                                </tr>
                                </tbody>
                            </table>	
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge warning"><i class="fa fa-tasks fa-2x"> UHJB </i>
                    </div>
                    <div >
                        <table class="table timeline-body table-bordered">
                            <thead>
                                <tr class="success">
                                    <th >Data</th> 
                                    <th >Hora</th> 
                                    <th >Nível</th>                      
                                    <th >Jusante</th>
                                    <th >Queda Bruta</th>
                                    <th>Afluência</th>                                     
                                    <th>Turbinado</th>                                    
                                    <th>Vertido</th> 
                                    <th>Defluência</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 25/06/17</td>
                                    <td> 10:00</td>
                                    <td> 194,48</td>
                                    <td> 132,5</td>
                                    <td> 61,98</td>
                                    <td> 14</td>
                                    <td> 2</td>
                                    <td> 24</td>
                                    <td> 26</td>
                                </tr>
                            <td> 25/06/17</td>
                            <td> 09:00</td>
                            <td> 194,48</td>
                            <td> 132,5</td>
                            <td> 61,98</td>
                            <td> 14</td>
                            <td> 2</td>
                            <td> 24</td>
                            <td> 26</td>
                            </tr>
                            <tr>
                                <td> 25/06/17</td>
                                <td> 08:00</td>
                                <td> 194,48</td>
                                <td> 132,5</td>
                                <td> 61,98</td>
                                <td> 14</td>
                                <td> 2</td>
                                <td> 24</td>
                                <td> 26</td>
                            </tr>
                            <tr>
                                <td> 25/06/17</td>
                                <td> 07:00</td>
                                <td> 194,90</td>
                                <td> 132,5</td>
                                <td> 61,98</td>
                                <td> 14</td>
                                <td> 2</td>
                                <td> 24</td>
                                <td> 26</td>
                            </tr>
                            </tbody>
                        </table>	
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge danger "><i class="fa fa-clock-o fa-2x"> UHPJ</i>
                    </div>
                    <div >
                        <table class="table timeline-body table-bordered">
                            <thead>
                                <tr class="success">
                                    <th >Data</th> 
                                    <th >Hora</th> 
                                    <th >Nível</th>                      
                                    <th >Jusante</th>
                                    <th >Queda Bruta</th>
                                    <th>Afluência</th>                                     
                                    <th>Turbinado</th>                                    
                                    <th>Vertido</th> 
                                    <th>Defluência</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 25/06/17</td>
                                    <td> 10:00</td>
                                    <td> 194,48</td>
                                    <td> 132,5</td>
                                    <td> 61,98</td>
                                    <td> 14</td>
                                    <td> 2</td>
                                    <td> 24</td>
                                    <td> 26</td>
                                </tr>
                            <td> 25/06/17</td>
                            <td> 09:00</td>
                            <td> 194,48</td>
                            <td> 132,5</td>
                            <td> 61,98</td>
                            <td> 14</td>
                            <td> 2</td>
                            <td> 24</td>
                            <td> 26</td>
                            </tr>
                            <tr>
                                <td> 25/06/17</td>
                                <td> 08:00</td>
                                <td> 194,48</td>
                                <td> 132,5</td>
                                <td> 61,98</td>
                                <td> 14</td>
                                <td> 2</td>
                                <td> 24</td>
                                <td> 26</td>
                            </tr>
                            <tr>
                                <td> 25/06/17</td>
                                <td> 07:00</td>
                                <td> 194,90</td>
                                <td> 132,5</td>
                                <td> 61,98</td>
                                <td> 14</td>
                                <td> 2</td>
                                <td> 24</td>
                                <td> 26</td>
                            </tr>
                            </tbody>
                        </table>	
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge warning"><i class="fa fa-support fa-2x"> UHSD </i>
                    </div>
                    <div >
                        <table class="table timeline-body table-bordered">
                            <thead>
                                 <tr class="success">
                                    <th >Data</th> 
                                    <th >Hora</th> 
                                    <th >Nível</th>                      
                                    <th >Jusante</th>
                                    <th >Queda Bruta</th>
                                    <th>Afluência</th>                                     
                                    <th>Turbinado</th>                                    
                                    <th>Vertido</th> 
                                    <th>Defluência</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 25/06/17</td>
                                    <td> 10:00</td>
                                    <td> 194,48</td>
                                    <td> 132,5</td>
                                    <td> 61,98</td>
                                    <td> 14</td>
                                    <td> 2</td>
                                    <td> 24</td>
                                    <td> 26</td>
                                </tr>
                            <td> 25/06/17</td>
                            <td> 09:00</td>
                            <td> 194,48</td>
                            <td> 132,5</td>
                            <td> 61,98</td>
                            <td> 14</td>
                            <td> 2</td>
                            <td> 24</td>
                            <td> 26</td>
                            </tr>
                            <tr>
                                <td> 25/06/17</td>
                                <td> 08:00</td>
                                <td> 194,48</td>
                                <td> 132,5</td>
                                <td> 61,98</td>
                                <td> 14</td>
                                <td> 2</td>
                                <td> 24</td>
                                <td> 26</td>
                            </tr>
                            <tr>
                                <td> 25/06/17</td>
                                <td> 07:00</td>
                                <td> 194,90</td>
                                <td> 132,5</td>
                                <td> 61,98</td>
                                <td> 14</td>
                                <td> 2</td>
                                <td> 24</td>
                                <td> 26</td>
                            </tr>
                            </tbody>
                        </table>	
                    </div>
                </li>
            </ul>

            <!-- /.panel-body -->

            <!-- /.panel -->
            @endsection
            @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            @section ('cchart11_panel_title','Gráficos')
            @section ('cchart11_panel_body')
            @include('widgets.charts.clinechart')
            @endsection
            @include('widgets.panel', array('header'=>true, 'as'=>'cchart11'))

            @section ('pane1_panel_title', 'Painel de Notificações')
            @section ('pane1_panel_body')


            <div class="list-group">
                <a href="#" class="list-group-item">
                    <i class="fa fa-comment fa-fw"></i> Novo Comentário!
                    <span class="pull-right text-muted small"><em>4 minutos atrás</em>
                    </span>
                </a>
            </div>
            <!-- /.list-group -->
            <a href="#" class="btn btn-default btn-block">Ver todos os alertas</a>

            <!-- /.panel-body -->

            @endsection
            @include('widgets.panel', array('header'=>true, 'as'=>'pane1'))


            <!-- /.panel -->
        </div>
        <!-- /.panel-heading -->
        <!-- /.panel-body -->
        <!-- /.panel-footer -->
    </div>
    <!-- /.panel .chat-panel -->
</div>

<!-- /.col-lg-4 -->

@stop
