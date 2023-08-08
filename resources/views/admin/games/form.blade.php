<label for="titulo">Titulo</label>
<input type="text" class="form-control" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}" placeholder="titulo de jogo"> <br>
<label for="titulo">Imagem do jogo</label>
<input type="file" class="form-control" name="imagem" placeholder="imagem do jogo"><br>
<label for="plataforma">Plataforma</label>

<select name="plataforma" class="form-control">
    <option value="Nes"{{ (isset($registro->plataforma) && $registro->plataforma == 'Nes') ? ' selected' : '' }}>Nes</option>
    <option value="Snes"{{ (isset($registro->plataforma) && $registro->plataforma == 'Snes') ? ' selected' : '' }}>Snes</option>
    <option value="Master System"{{ (isset($registro->plataforma) && $registro->plataforma == 'Master System') ? ' selected' : '' }}>Master Systen</option>
    <option value="Mega Driver"{{ (isset($registro->plataforma) && $registro->plataforma == 'Mega Driver') ? ' selected' : '' }}>Mega Driver</option>
</select> <br>

<label for="genero">Genero</label>
<input type="text" class="form-control" name="genero" value="{{ isset($registro->genero) ? $registro->genero : '' }}" placeholder="Digite genero do jogo">

<label for="descricao">Descrição</label><br>
<textarea name="descricao" id="" cols="50" rows="30">{{ isset($registro->descricao) ? $registro->descricao : '' }}</textarea><br>

<label for="arquivo">Arquivo ISO</label>
<input type="file" class="form-control" name="arquivo" placeholder="arquivo do jogo"><br>

