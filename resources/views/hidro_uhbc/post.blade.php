@extends ('layouts.dashboard')
@section('page_heading','Cota Volume Uhbc')

@section('section')
<div class="container">
    <div class="content">
        <strong>Lista de Post</strong>              
        @if($post)              
        <h2>{{$post->titulo}}</h2>
        <p>{{$post->texto}}</p>
        @endif
    </div>
</div>
@stop
