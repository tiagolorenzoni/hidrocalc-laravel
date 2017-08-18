@extends ('layouts.dashboard')
@section('page_heading','Dados Uhbc')

@section('section')
<div class="container-fluid">
    <div>
        <div >
            <table class="table table-bordered">
                <thead><tr class="info">
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Montante</th>
                        <th>Jusante</th>
                        <th>UG1</th>
                        <th>Estado UG1</th>
                        <th>UG2</th>
                        <th>Estado UG2</th>
                        
                    </tr>
                </thead > 
                <tbody><tr>            
                        @if($dados_uhbcs)
                        @foreach($dados_uhbcs as $dados_uhbc) 
                        <td>{{$dados_uhbc->data_bc}}</td>
                        <td>{{$dados_uhbc->hora_bc}}</td>
                        <td>{{$dados_uhbc->nivel_montante_bc}}</td>
                        <td>{{$dados_uhbc->nivel_jusante_bc}}</td>
                        <td>{{$dados_uhbc->geracao_ug1_bc}}</td>
                        <td>{{$dados_uhbc->estadoug1_bc}}</td>
                        <td>{{$dados_uhbc->geracao_ug2_bc}}</td>
                        <td>{{$dados_uhbc->estadoug2_bc}}</td>
                        <td> <a href="{{ url ('UHBC/edita') }}/{{$dados_uhbc->id}}" class="btn-sm btn-success">Editar</a> 
                            <a href="{{ url ('UHBC/deletar/' ) }}/{{$dados_uhbc->id}}" class="btn-sm btn-danger">Remover</a> 
                    </tr></tbody>
                @endforeach
                @endif
            </table>
        </div>  
    </div>
</div>
@stop