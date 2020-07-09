@extends('Template')

@section('view')
	<div class="ver_objeto">
		<h1 class="titulo">{{$titulo}}</h1>
		<br/>
		<p ><strong>Nome:</strong> {{$filme->nome}}</p>
		<p ><strong>Autor:</strong> {{$filme->autor}}</p>
		<p ><strong>Gênero:</strong> {{$filme->genero}}</p>
		<p ><strong>Duração:</strong> {{$filme->duracao}}</p>

		<form method="post" action="{{route('filmes.destroy',$filme->id)}}">
			{!! csrf_field() !!}
			{!! method_field('DELETE') !!}
			<button class="btn btn-dark botao">Deletar</button>
		</form>
	</div>


@endsection