<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Bilhetes</title>
</head>

<body>
    <h1>Index Bilhete</h1>
    <br>
    <h3>Bilhete</h3>
    @forelse ($bilhetes as $bilhete)
    <div>
        <a href="{{route('bilhetes.show',$bilhete->id)}}">{{$bilhete->id}}</a>
    </div>
    @empty
    <div>
        <h1>Sem Bilhetes</h1>
    </div>
    @endforelse
</body>

</html>