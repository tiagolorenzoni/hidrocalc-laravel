@extends ('layouts.dashboard')
@section('page_heading','Cota Volume Uhbc')

@section('section')
        <div class="container-fluid">
            <div>
                <div >
                    <strong>Cota Volume de UHBC</strong>
                    <table class="table table-bordered">
                        <thead><tr class="info">
                        <th>Cota</th>
                        <th>Volume Total</th> 
                        <th>Volume Util</th> 
                        <th>% Volume Útil</th> 
                        </tr>
                        </thead > 
                        <tbody><tr>            
                        @if($cota_volume_uhbcs)
                        @foreach($cota_volume_uhbcs as $cota_volume_uhbc) 
                        <td>{{$cota_volume_uhbc->cota_bc}}</td>
                        <td>{{$cota_volume_uhbc->volume_total_bc}}</td>
                        <td>{{$cota_volume_uhbc->volume_util_bc}}</td>
                        <td>{{$cota_volume_uhbc->percentual_vu_bc}}</td>                       
                        </tr></tbody>
                        @endforeach
                        @endif
                    </table>
                </div>  
            </div>
        </div>
@stop