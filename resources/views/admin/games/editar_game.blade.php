@include('layout.base')

<div class="row mt-4">
    <h2 class="text-center">Atualizar Jogo</h2>
</div>
<div class="container mt-5">
    <form action="{{route('admin.games.atualizar_game',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    
        <input type="hidden"  name="_method" value="put">
        @include('admin.games.form')
    
        <button class="btn btn-primary">atualizar</button> 
    </form>
</div>

<div class="mt-4">
    @include('layout.includes.rodape')
</div>

