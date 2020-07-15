@extends('Template')

@section('view')
	<div class="ver">
		<center><h1 class="titulo">{{$titulo}}</h1></center>
		<br/>
		<p class="label"><strong>Nome:</strong> {{$filme->nome}}</p>
		<p class="label"><strong>Autor:</strong> {{$filme->autor}}</p>
		<p class="label"><strong>Gênero:</strong> {{$filme->genero}}</p>
		<p class="label"><strong>Duração:</strong> {{$filme->duracao}}</p>

		<form method="post" action="{{route('filmes.destroy',$filme->id)}}">
			{!! csrf_field() !!}
			{!! method_field('DELETE') !!}
			<button class="btn btn-dark botao">Deletar</button>
		</form>
	</div>


@endsection