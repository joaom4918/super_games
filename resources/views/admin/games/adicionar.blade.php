@include('layout.base')

<h1>Adicionar jogos</h1>

<form action="{{route('admin.games.salvar')}}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}

   @include('admin.games.form') 

    <button class="btn btn-primary">salvar</button> 

</form>