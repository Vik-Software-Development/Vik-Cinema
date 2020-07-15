@extends('Template')

@section('view')
	<div class="ver">
		<center><h1 class="titulo">{{$titulo}}</h1></center>
		<br/>
		<p class="label"><strong>Nome:</strong> {{$sala->nome}}</p>
		<p class="label"><strong>Quantidade de Pessoas:</strong> {{$sala->quantPessoas}}</p>

		<form method="post" action="{{route('salas.destroy', $sala->id)}}">
			{!! csrf_field() !!}
			{!! method_field('DELETE') !!}
			<button class="btn btn-dark botao">Deletar</button>
		</form>
	</div>

@endsection