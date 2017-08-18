@extends ('layouts.dashboard')
@section('page_heading','ftp Uhbc')

@section('section')
<div class="container-fluid">
    <div>
        <div >
            <table class="table table-bordered">
                <thead><tr class="info">
                        <th>Data</th> 
                        <th>Hora</th> 
                        <th>Nível Montante (m)</th>                      
                        <th>Nível Jusante (m)</th>
                        <th>Queda Bruta (m)</th>
                        <th>Vazão Afluente (m³/s)</th>
                        <th>Vazão Vertida (m³/s)</th>                               
                        <th>Vazão Turbinada (m³/s)</th>                                    
                        <th>Vazão Defluente (m³/s)</th>                                   
                        <th>Vazão  Afluênte Referência (m³/s)</th>
                        <th>Vazão  Acumulada (m³/s)</th>
                        <th>Estado Hidráulico Reservatório</th>
                        <th>Volume acumulado (hm³)</th>
                        <th>Percentual Volume Ùtil</th>   
                    </tr>
                </thead > 
                <tbody><tr>           
                        $arrayuhbc as $dados_uhbc
                        <td>{{$dados_uhbc}}</td>
                        <td >Normal</td>
                        <td >Normal</td>
                        <td >Normal</td>
                    </tr>
                </tbody>
            </table>
        </div>  
    </div>
</div>
@stop