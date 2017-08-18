@extends ('layouts.dashboard')
@section('page_heading','Vazão Sanitária Uhbc')

@section('section')
<div class="container-fluid">
    <div>
        <div >
            <table class="table table-bordered">
                <thead><tr class="info">
                        <th>Cota</th>
                        <th>Vazão</th>
                    </tr>
                </thead > 
                <tbody><tr>            
                        @foreach($sanitarias as $sanitaria) 
                        <td>{{$sanitaria->nivel_reservatorio_bc}}</td>
                        <td>{{$sanitaria->vazao_sanitaria_bc}}</td>
                    </tr></tbody>
                @endforeach
            </table>
        </div>  
    </div>
</div>
@stop