@include('layout.base')


<h1>Lista Master System</h1>
<div class="container">
    <div class="row">
  
      @foreach ($jogos as $jogo)
  
      <div class="col-md-4 mt-4">
        <div class="card" style="width: 18rem; background-color: #dee2e6;">
          <img src="{{asset($jogo->imagem)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$jogo->titulo}}</h5>
            <p class="card-text"><i class="fas fa-gamepad"> {{$jogo->plataforma}}</i></p>
            <p><i class="fas fa-cube"> {{$jogo->genero}}</i></p> 
            
            
            <a href="#" class="btn btn-danger" style="border-color: #000000;">Saiba Mais</a>
          </div>
        </div>
      </div>
    
    @endforeach
    
    </div> 
  </div>