

@include('layout.base')


<div class="mt-5 text-center">
  <img src="{{asset('img/games/nes_logo.png')}}" width="600" alt=""> 
</div>

<div class="container mt-5">
    <div class="row">
  
      @foreach ($jogos as $jogo)
  
      <div class="col-md-4 mt-4">
        <div class="card" style="width: 18rem; background-color: #dee2e6;">
          <img src="{{asset($jogo->imagem)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$jogo->titulo}}</h5>
            <p class="card-text"><i class="fas fa-gamepad"> {{$jogo->plataforma}}</i></p>
            <p><i class="fas fa-cube"> {{$jogo->genero}}</i></p> 
            
            
            <a href="{{route('admin.games.descricao',$jogo->id)}}" class="btn btn-danger">Saiba Mais</a>
          </div>
        </div>
      </div> 
    
    @endforeach
    
    </div> 
  </div>
   
  <div class="mt-5">
    @include('layout.includes.rodape')
</div>