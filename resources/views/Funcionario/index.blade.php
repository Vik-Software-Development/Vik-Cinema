@extends('Template')

@section('view')
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

@endsection