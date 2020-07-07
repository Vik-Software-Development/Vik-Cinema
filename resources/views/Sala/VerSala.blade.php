@extends('Template')

@section('view')

	<h1 class="titulo">{{$titulo}}</h1>
	<br/>
	<br/>
	<p class="ver_p"><strong>Nome:</strong> {{$sala->nome}}</p>
	<p class="ver_p"><strong>Quantidade de Pessoas:</strong> {{$sala->quantPessoas}}</p>

	<form method="post" action="{{route('salas.destroy', $sala->id)}}">
		{!! csrf_field() !!}
		{!! method_field('DELETE') !!}
		<button class="btn btn-dark">Deletar</button>
	</form>


@endsection