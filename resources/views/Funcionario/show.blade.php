@extends('Template')

@section('view')
    <div class="ver">
        <center><h1 class="titulo">{{$titulo}}</h1></center>
        <br/>
        <p class="label"><strong>Nome:</strong> {{$funcionario->Nome}}</p>
        <p class="label"><strong>CPF:</strong> {{$funcionario->CPF}}</p>
        <p class="label"><strong>Telefone:</strong> {{$funcionario->Telefone}}</p>
        <p class="label"><strong>Email:</strong> {{$funcionario->Email}}</p>

        <form method="post" action="{{route('funcionarios.destroy',$funcionario->id)}}">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}
            <button class="btn btn-dark botao">Deletar</button>
        </form>
    </div>


@endsection