@extends('Sala.TemplateSala')

@section('viewSala')

	<h1 class="titulo">{{$titulo}}</h1>
	<br/>
	<br/>
	<p class="ver_p"><strong>Nome:</strong> {{$filme->nome}}</p>
	<p class="ver_p"><strong>Autor:</strong> {{$filme->autor}}</p>
	<p class="ver_p"><strong>Gênero:</strong> {{$filme->genero}}</p>
	<p class="ver_p"><strong>Duração:</strong> {{$filme->duracao}}</p>

	<form method="post" action="{{route('deletarFilme',$filme->id)}}">
		{!! csrf_field() !!}
		{!! method_field('DELETE') !!}
		<button class="btn btn-dark">Deletar</button>
	</form>


@endsection