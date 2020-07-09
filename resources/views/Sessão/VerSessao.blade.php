@extends('Template')

@section('view')
	<div class="ver_objeto">
		<h1 class="titulo">{{$titulo}}</h1>
		<br/>
		<p class="ver_p"><strong>Filme:</strong> {{$filme->nome}}</p>
		<p class="ver_p"><strong>Sala:</strong> {{$sala->nome}}</p>
		<p class="ver_p"><strong>Data:</strong> {{$sessao->data}}</p>
		<p class="ver_p"><strong>Hora:</strong> {{$sessao->hora}}</p>

		<form method="post" action="{{route('sessaos.destroy',$sessao->id)}}">
			{!! csrf_field() !!}
			{!! method_field('DELETE') !!}
			<button class="btn btn-dark botao">Deletar</button>
		</form>
	</div>


@endsection