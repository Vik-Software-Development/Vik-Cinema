<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Funcionário</title>
</head>

<body>
    <h1>Index Funcionario</h1>
    <br>
    <h3>Nome</h3>
    @forelse ($funcionarios as $funcionario)
    <div>
        <a href="{{route('funcionarios.show',$funcionario->id)}}">{{$funcionario->Nome}}</a>
    </div>
    @empty
    <div>
        <h1>Sem Funcionarios</h1>
    </div>
    @endforelse
</body>

</html>