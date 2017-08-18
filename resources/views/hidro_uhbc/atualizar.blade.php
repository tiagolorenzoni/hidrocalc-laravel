@extends ('layouts.dashboard')
@section('page_heading','Edição UHBC')

@section('section')
<div class="container">
    <div class="content">
        <strong>Novo Post</strong>
        <form method="post" action="/laravel/public/post/{{$post->id}}/atualizar">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" value="{{$post->titulo}}"  >
                <label for="texto">Texto</label>
                <textarea name="texto" id="texto">
                        {{$post->texto}}
                </textarea>
                <input type="hidden" name="publicado" id="publicado" value="1">
                {{ csrf_field() }}
                <input type="submit" name="submit" value="Adicionar Post">
            </div>
        </form>
    </div>
</div>
@stop