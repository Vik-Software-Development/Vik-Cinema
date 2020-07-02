<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario Create</title>
</head>

<body>
    <div>
        <form action="{{route('funcionarios.store')}}" method="POST">
            @csrf
            <div>
                <label for='Nome'>Nome</label>
                <input type='text' name='Nome'>
            </div>
            <div>
                <label for='CPF'>CPF</label>
                <input type='text' name='CPF' min='11' max='11'>
            </div>
            <div>
                <label for='Telefone'>Telefone</label>
                <input type='text' name='Telefone' id='telefone' data-mask="(00) 0000-0000" data-mask-selectonfocus="true">
            </div>
            <div>
                <label for='Email'>Email</label>
                <input type='email' name='Email'>
            </div>
            <div>
                <label for='Senha'>Senha</label>
                <input type='password' name='Senha'>
            </div>
            <button type='submit'>Cadastrar</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js'></script>
<script>
    $(document).ready(function() {
        var maskBehavior = function(val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            options = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(maskBehavior.apply({}, arguments), options);
                }
            };

        $('#telefone').mask(maskBehavior, options);
    });
</script>

</html>