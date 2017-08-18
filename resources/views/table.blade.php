@extends('layouts.dashboard')
@section('page_heading','Uhbc Tabela')

@section('section')
<div class="col-sm-12">	
    <div class="row">
        <div class="col-sm-12">
            @section ('cotable_panel_title','Dados preenchidos')
            @section ('cotable_panel_body')
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th >Data</th> 
                        <th >Hora</th> 
                        <th >Cota</th>                      
                        <th >Jusante</th> 
                        <th >Mwh UG1</th> 
                        <th> Estado UG1</th> 
                        <th >Mwh UG2</th> 
                        <th> Estado UG2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <td> $arrayuhbc['data']</td>
                        <td> $arrayuhbc['hora']</td>
                        <td> $arrayuhbc['cota']</td>
                        <td> $arrayuhbc['jus']</td>
                        <td> $arrayuhbc['aflu']</td>
                        <td> $arrayuhbc['turb']</td>
                        <td> $arrayuhbc['vert']</td>
                        <td> $arrayuhbc['defl']</td>
                    </tr>
                    <tr>
                        <td> $arrayuhbc['data']</td>
                        <td> $arrayuhbc['hora']</td>
                        <td> $arrayuhbc['cota']</td>
                        <td> $arrayuhbc['jus']</td>
                        <td> $arrayuhbc['aflu']</td>
                        <td> $arrayuhbc['turb']</td>
                        <td> $arrayuhbc['vert']</td>
                        <td> $arrayuhbc['defl']</td>
                    </tr>
                    <tr class="info">
                        <td> $arrayuhbc['data']</td>
                        <td> $arrayuhbc['hora']</td>
                        <td> $arrayuhbc['cota']</td>
                        <td> $arrayuhbc['jus']</td>
                        <td> $arrayuhbc['aflu']</td>
                        <td> $arrayuhbc['turb']</td>
                        <td> $arrayuhbc['vert']</td>
                        <td> $arrayuhbc['defl']</td>
                    </tr>
                </tbody>
            </table>	
            @endsection
            @include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
        </div>
    </div>
</div>
@stop