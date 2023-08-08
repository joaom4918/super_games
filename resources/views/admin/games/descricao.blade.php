@include('layout.base')

 

<div class="container mt-5" style="color:white">
    <h1>{{$jogo->titulo}}</h1> 
    <img src="{{asset($jogo->imagem)}}" width="200" height="200">
    <p>{{$jogo->descricao}}</p>
    <form action="{{asset($jogo->arquivo)}}" method="get">
     <button  class="btn btn-primary">Download</button>
    </form>
 
</div>
<div class="mt-4">
    @include('layout.includes.rodape') 
</div>

