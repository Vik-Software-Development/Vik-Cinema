@extends('Sala.TemplateSala')

@section('viewSala')

	<h1 class="titulo">{{$titulo}}</h1>
	<a href="{{route('salas.create')}}" class="btn btn-dark botao_table">Cadastrar</a>

	<table class="table table-striped">
		<tr>
			<th>Nome</th>
			<th>Quantidade Pessoas</th>
			<th>Ações</th>
		</tr>
		@foreach($salas as $sala)
			<tr>
				<td>{{$sala->nome}}</td>
				<td>{{$sala->quantPessoas}}</td>
				<td>
					<a href="{{route('salas.edit', $sala->id)}}" class="acao_table">Editar</a>
					<a href="{{route('salas.show', $sala->id)}}" class="acao_table">Visualizar</a>
				</td>
			</tr>
		@endforeach
	</table>

@endsection()