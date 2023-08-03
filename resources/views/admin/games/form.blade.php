<label for="titulo">titulo</label>
<input type="text" class="form-control" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}" placeholder="titulo de jogo"> <br>
<label for="titulo">imagem do jogo</label>
<input type="file" class="form-control" name="imagem" placeholder="imagem do jogo"><br>
<label for="plataforma">plataforma</label>

<select name="plataforma" class="form-control">
    <option value="Nes"{{ (isset($registro->plataforma) && $registro->plataforma == 'Nes') ? ' selected' : '' }}>Nes</option>
    <option value="Snes"{{ (isset($registro->plataforma) && $registro->plataforma == 'Snes') ? ' selected' : '' }}>Snes</option>
    <option value="Master Systen"{{ (isset($registro->plataforma) && $registro->plataforma == 'Master Systen') ? ' selected' : '' }}>Master Systen</option>
    <option value="Mega Drive"{{ (isset($registro->plataforma) && $registro->plataforma == 'Mega Drive') ? ' selected' : '' }}>Mega drive</option>
</select> <br>

<label for="genero">Genero</label>
<input type="text" class="form-control" name="genero" value="{{ isset($registro->genero) ? $registro->genero : '' }}" placeholder="Digite genero do jogo">

<label for="descricao">descrição</label><br>
<textarea name="descricao" id="" cols="30" rows="20">{{ isset($registro->descricao) ? $registro->descricao : '' }}</textarea><br>
