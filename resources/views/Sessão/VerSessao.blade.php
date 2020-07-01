@extends('Sessão.TemplateSessao')

@section('viewSessao')

	<h1 class="titulo">{{$titulo}}</h1>
	<br/>
	<br/>
	<p class="ver_p"><strong>Filme:</strong> {{$filme->nome}}</p>
	<p class="ver_p"><strong>Sala:</strong> {{$sala->nome}}</p>
	<p class="ver_p"><strong>Data:</strong> {{$sessao->data}}</p>
	<p class="ver_p"><strong>Hora:</strong> {{$sessao->hora}}</p>

	<form method="post" action="{{route('deletarSessao',$sessao->id)}}">
		{!! csrf_field() !!}
		{!! method_field('DELETE') !!}
		<button class="btn btn-dark">Deletar</button>
	</form>


@endsection