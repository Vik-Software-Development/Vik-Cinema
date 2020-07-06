<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Bilhete</title>
</head>

<body>
    <h1>Preço</h1>
    <h4>{{$bilhete->preco}}</h4>
    <h1>Sessão</h1>
    <h4>{{$bilhete->sessao}}</h4>
    <br>
    <form action="{{route('bilhetes.destroy',[$bilhete->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar">
    </form>

</body>

</html>