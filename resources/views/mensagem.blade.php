@extends ('layouts.dashboard')
@section('page_heading','Mensagem')
@section('section')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">Mensagem:{{$mensagem}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
