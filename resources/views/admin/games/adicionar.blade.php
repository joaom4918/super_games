@include('layout.base')


<div class="row mt-4">
    <h2 class="text-center">Adicionar Jogos</h2>
</div>


<div class="container">

        <form action="{{route('admin.games.salvar')}}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
        
           @include('admin.games.form') 
        
            <button class="btn btn-primary">Salvar <i class="fas fa-save"></i></button>
          
            
            
        
        </form>
    

      
</div>
<div class="mt-4">
    @include('layout.includes.rodape')
</div>


