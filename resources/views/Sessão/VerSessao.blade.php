@extends('Template')

@section('view')
	<div class="ver">
		<center><h1 class="titulo">{{$titulo}}</h1></center>
		<br/>
		<p class="label"><strong>Filme:</strong> {{$filme->nome}}</p>
		<p class="label"><strong>Sala:</strong> {{$sala->nome}}</p>
		<p class="label"><strong>Data:</strong> {{$sessao->data}}</p>
		<p class="label"><strong>Hora:</strong> {{$sessao->hora}}</p>

		<form method="post" action="{{route('sessaos.destroy',$sessao->id)}}">
			{!! csrf_field() !!}
			{!! method_field('DELETE') !!}
			<button class="btn btn-dark botao">Deletar</button>
		</form>
	</div>


@endsection