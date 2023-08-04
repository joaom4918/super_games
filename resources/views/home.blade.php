

@include('layout.base')

<div class="row mt-4">

  <div class="col-md-6 col-lg-3">
    <div class="card mb-4">
      <a href="{{route('listas.lista_super_nintendo')}}">
      <img src="img/games/super_nitendo.png" class="card-img-top" alt="...">
    </a>
      <div class="card-body">
        <h2>Super Nintendo</h2>
      </div>
    </div>
  
  </div>
  
  <div class="col-md-6 col-lg-3">
    <div class="card mb-4">
      <a href="{{route('listas.lista_nes')}}"> 
      <img src="img/games/nes.png" class="card-img-top" alt="...">
    </a>
      <div class="card-body">
        <h2>Nes</h2>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-3">
    <div class="card mb-4">
      <a href="{{route('listas.lista_mega_drive')}}">
      <img src="img/games/mega_drive.png" class="card-img-top" alt="...">
    </a>
      <div class="card-body">
        <h2>Mega Driver</h2>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-3">
    <div class="card mb-4">
      <a href="{{route('listas.lista_master_system')}}">
      <img src="img/games/master_system.png" class="card-img-top" alt="...">
    </a>
      <div class="card-body">
        <h2>Master System</h2>
      </div>
    </div>
  </div>
</div>
 