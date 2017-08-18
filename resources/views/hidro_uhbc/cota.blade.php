@extends ('layouts.dashboard')
@section('page_heading','Cota Volume Uhbc')

@section('section')
<div class="container-fluid">
    <div>
        @if ($errors->any()) 
        <ul class="alert alert-warning"> 
            @foreach($errors->all() as $error) 
            <li>{{ $error }}</li> 
            @endforeach  </ul>
        @endif
        <form method="post" action="cota_uhbc/buscar">
            <div class="panel-body">
                <input type="text" name="busca" required="true">
                {{ csrf_field() }}
                <input class="btn btn-default btn-lg " type="submit"  value="Busca">               
            </div>
        </form>
        <div >
            <table class="table table-bordered">
                <thead><tr class="info">
                        <th>Cota</th>
                        <th>Volume Total</th> 
                        <th>Volume Util</th> 
                    </tr>
                </thead > 
                <tbody><tr>            
                        @if($cota_volume_uhbcs)
                        @foreach($cota_volume_uhbcs as $cota_volume_uhbc) 
                        <td>{{$cota_volume_uhbc->cota_bc}}</td>
                        <td>{{$cota_volume_uhbc->volume_total_bc}}</td>
                        <td>{{$cota_volume_uhbc->volume_util_bc}}</td>
                    </tr></tbody>
                @endforeach
                @endif
            </table>
        </div>  
    </div>
</div>
@stop