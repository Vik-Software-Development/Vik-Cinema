@extends('Filme.TemplateFilme')

@section('viewFilme')

	<h1 class="titulo">{{$titulo}}</h1>
	<a href="{{route('filmes.create')}}" class="btn btn-dark botao_table">Cadastrar</a>

	<table class="table table-striped">
		<tr>
			<th>Nome</th>
			<th>Autor</th>
			<th>Gênero</th>
			<th>Duração</th>
			<th>Ações</th>
		</tr>
		@foreach($filmes as $filme)
			<tr>
				<td>{{$filme->nome}}</td>
				<td>{{$filme->autor}}</td>
				<td>{{$filme->genero}}</td>
				<td>{{$filme->duracao}}</td>
				<td>
					<a href="{{route('filmes.edit',$filme->id)}}" class="acao_table">Editar</a>
					<a href="{{route('filmes.show',$filme->id)}}" class="acao_table">Visualizar</a>
				</td>
			</tr>
		@endforeach
	</table>

@endsection()