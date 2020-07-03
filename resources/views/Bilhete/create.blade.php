<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilhete Create</title>
</head>

<body>
    <div>
        <form action="{{route('bilhetes.store')}}" method="POST">
            @csrf
            <div>
                <label for='Nome'>Preço</label>
                <input type='text' name='preco' id='preco'>
            </div>
            <div>
                <label for='Nome'>Sessão</label>
                <select name='sessao' id='sessao'>
                    @foreach ($sessoes as $sessao)
                <option value="{{$sessao->id}}">{{$sessao->id}}</option>   
                    @endforeach
                </select>
            </div>
            <button type='submit'>Cadastrar</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js'></script>

<script>
    $(document).ready(function(){
        $('#preco').mask('000.000.000.000.000,00', {reverse: true});
    });
</script>

</html>