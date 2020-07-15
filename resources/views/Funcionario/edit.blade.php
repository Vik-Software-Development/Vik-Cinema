@extends('Template')

@section('view')

    <center><h1 class="titulo">{{$titulo}}</h1></center>
    <div class="cadastrar_editar">
        <form action="{{route('funcionarios.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for='Nome' class="label">Nome:</label>
                <input type='text' name='Nome' class="form-control" value="{{$funcionario->Nome}}"/>
            </div>
            <div class="form-group">
                <label for='CPF' class="label">CPF:</label>
                <input type='text' name='CPF' min='11' max='11' class="form-control" value="{{$funcionario->CPF}}"/>
            </div>
            <div class="form-group">
                <label for='Telefone' class="label">Telefone:</label>
                <input type='text' name='Telefone' id='telefone' data-mask="(00) 0000-0000" data-mask-selectonfocus="true" placeholder="(ddd) numero (ex: (87) 99999-9999)" class="form-control" value="{{$funcionario->Telefone}}"/>
            </div>
            <div class="form-group">
                <label for='Email' class="label">Email:</label>
                <input type='email' name='Email' class="form-control" value="{{$funcionario->Email}}"/>
            </div>
            <div class="form-group">
                <label for='Senha' class="label">Senha:</label>
                <input type='password' name='Senha' class="form-control" value="{{$funcionario->Senha}}"/>
            </div>
            <center><button type='submit' class="btn btn-dark botao">Atualizar</button></center>
        </form>
    </div>

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

@endsection