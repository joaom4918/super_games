

@include('layout.base')

<table class="table   table-striped">

    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Imagem</th>
        <th>Opções</th>
       
    </thead>

    <tbody>
        @foreach ($registros as $registro)
        <tr>
            <td>{{ $registro['id'] }}</td>
            <td>{{ $registro['titulo'] }}</td>
            <td><img src="{{asset($registro->imagem)}}" width="70" height="70" alt=""></td>
            <td>
                <a  class="btn btn-primary" href="{{route('admin.games.editar_game',$registro->id)}}"><i class="far fa-edit"></i></a>
                <a  class="btn btn-dark" href="{{route('admin.games.excluir_game',$registro->id)}}"><i class="fas fa-trash-alt"></i></a>
           
            </td>

           
        </tr>

        @endforeach
    </tbody>
</table>
