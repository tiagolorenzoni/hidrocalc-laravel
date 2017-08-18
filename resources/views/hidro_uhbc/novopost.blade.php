@extends ('layouts.dashboard')
@section('page_heading','Cota Volume Uhbc')

@section('section')
        <div class="container">
            <div class="content">
                <div class="title">Novo Post</div>
                <form method="post" action="/laravel/public/post/novo">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo">
                    <label for="texto">Texto</label>
                    <textarea name="texto" id="texto" cols="30" rows="10">
                        
                    </textarea>
                    <input type="hidden" name="publicado" id="publicado" value="1">
                    {{ csrf_field() }}
                    <input type="submit" name="submit" value="Adicionar Post">
                </form>
            </div>
        </div>
@stop