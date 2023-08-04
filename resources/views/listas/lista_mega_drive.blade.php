
@include('layout.base')



<div class="container">
    <div class="row">
  
      @foreach ($jogos as $jogo)
  
      <div class="col-md-4 mt-4">
        <div class="card" style="width: 18rem; background-color: #020202; color:white">
          <img src="{{asset($jogo->imagem)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$jogo->titulo}}</h5>
            <p class="card-text"><i class="fas fa-gamepad"> {{$jogo->plataforma}}</i></p>
            <p><i class="fas fa-cube"> {{$jogo->genero}}</i></p> 
           
            <a href="#" class="btn btn-primary" >Saiba Mais</a>
          </div>
        </div>
      </div>
    
    @endforeach
    
    </div> 
  </div>