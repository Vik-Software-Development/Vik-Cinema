<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Funcionario</title>
</head>

<body>
    <h1>{{$funcionario->Nome}}</h1>
    <h4>{{$funcionario->CPF}}</h4>
    <h4>{{$funcionario->Telefone}}</h4>
    <h4>{{$funcionario->Email}}</h4>
    <br>
    <a href="{{route('funcionarios.edit',[$funcionario->id])}}">Editar</a>
    <form action="{{route('funcionarios.destroy',[$funcionario->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar">
    </form>

</body>

</html>