@extends ('layouts.dashboard')
@section('page_heading','Vazão Vertida Uhbc')

@section('section')
        <div class="container-fluid">
            <div>
                <div >
                    <table class="table table-bordered">
                        <thead><tr class="info">
                        <th>Nível Montante</th> 
                        <th>Vazão Vertida</th>
                        </tr>
                        </thead > 
                        <tbody><tr>            
                        @if($vazao_vertida_uhbcs)
                        @foreach($vazao_vertida_uhbcs as $vazao_vertida_uhbc) 
                        <td>{{$vazao_vertida_uhbc->nivel_reservatorio_bc}}</td>
                        <td>{{$vazao_vertida_uhbc->vazao_vertida_bc}}</td>
                        </tr></tbody>
                        @endforeach
                        @endif
                    </table>
                </div>  
            </div>
        </div>
@stop