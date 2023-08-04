<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Super Games</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/"><i class="fas fa-home"> Pagina Inicial</i></a>
                </li>
            
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.games.adicionar')}}"><i class="fas fa-plus"> Adicionar Jogos</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.games.lista_jogos')}}"><i class="fas fa-clipboard-list"> Lista De jogos</i></a>
                </li>

                
               
            </ul>
        </div>
    </div>
</nav>