@include('layout.base')

<form action="{{route('admin.games.atualizar_game',$registro->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <input type="hidden"  name="_method" value="put">
    @include('admin.games.form')

    <button class="btn btn-primary">atualizar</button> 
</form>