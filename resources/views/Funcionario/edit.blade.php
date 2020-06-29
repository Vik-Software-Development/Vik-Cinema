<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Funcionario</title>
</head>

<body>
    <div>
        <form action="{{route('funcionario.edit.do',$funcionario->id)}}" method="POST">
            @csrf
            <div>
                <label for='Nome'>Nome</label>
                <input type='text' name='Nome' value="{{$funcionario->Nome}}">
            </div>
            <div>
                <label for='CPF'>CPF</label>
                <input type='text' name='CPF' value="{{$funcionario->CPF}}">
            </div>
            <div>
                <label for='Telefone'>Telefone</label>
                <input type='text' name='Telefone' id='telefone' value="{{$funcionario->Telefone}}">
            </div>
            <div>
                <label for='Email'>Email</label>
                <input type='email' name='Email' value="{{$funcionario->Email}}">
            </div>
            <div>
                <label for='Senha'>Senha</label>
                <input type='password' name='Senha'>
            </div>
            <button type='submit'>Editar</button>
        </form>
    </div>
</body>

</html>