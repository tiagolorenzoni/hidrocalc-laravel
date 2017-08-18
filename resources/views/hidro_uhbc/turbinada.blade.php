@extends ('layouts.dashboard')
@section('page_heading','Vazão Turbinada Uhbc')

@section('section')
        <div class="container-fluid">
            <div>
                <div >
                    <table class="table table-bordered">
                        <thead><tr class="info">
                        <th>Queda Bruta</th>
                        <th>Potência</th> 
                        <th>Vazão Turbinada</th>
                        </tr>
                        </thead > 
                        <tbody><tr>            
                        @if($vazao_turbinada_uhbcs)
                        @foreach($vazao_turbinada_uhbcs as $vazao_turbinada_uhbc) 
                        <td>{{$vazao_turbinada_uhbc->queda_bruta_bc}}</td>
                        <td>{{$vazao_turbinada_uhbc->potencia_bc}}</td>
                        <td>{{$vazao_turbinada_uhbc->vazao_turbinada_bc}}</td>
                        </tr></tbody>
                        @endforeach
                        @endif
                    </table>
                </div>  
            </div>
        </div>
@stop