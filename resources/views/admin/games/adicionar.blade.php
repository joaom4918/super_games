@include('layout.base')

<h1>Adicionar jogos</h1>

<form action="{{route('admin.games.salvar')}}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}

    <label for="titulo">titulo</label>
    <input type="text" class="form-control" name="titulo" placeholder="titulo de jogo"> <br>
    <label for="titulo">imagem do jogo</label>
    <input type="file" class="form-control" name="imagem" placeholder="imagem do jogo"><br>
    <label for="plataforma">plataforma</label>
 
    <select name="plataforma" class="form-control"> 
        <option value="Nes">Nes</option>
        <option value="Snes">Snes</option>
        <option value="Master Systen">Master Systen</option>
        <option value="Mega Drive">Mega drive</option>
        
    </select> <br>
 
    <label for="genero">Genero</label>
    <input type="text" class="form-control" name="genero" placeholder="Digite genero do jogo">
    

    <label for="descricao">descrição</label><br>
    <textarea name="descricao" id="" cols="30" rows="20"></textarea><br>

    <button class="btn btn-primary">salvar</button> 

</form>