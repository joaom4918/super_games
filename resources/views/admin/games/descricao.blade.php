@include('layout.base')


   <h1>{{$jogo->titulo}}</h1> 
   <img src="{{asset($jogo->imagem)}}" width="70" height="70">
   <p>{{$jogo->descricao}}</p>
  <button class="btn btn-primary">download</button> 
