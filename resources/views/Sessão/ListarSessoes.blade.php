@extends('Sessão.TemplateSessao')

@section('viewSessao')

	<h1 class="titulo">{{$titulo}}</h1>
	<a href="{{route('cadastrarSessao')}}" class="btn btn-dark botao_table">Cadastrar</a>

	<table class="table table-striped">
		<tr>
			<th>Filme</th>
			<th>Sala</th>
			<th>Data</th>
			<th>Hora</th>
			<th>Ações</th>
		</tr>
		@foreach($sessoes as $sessao)
			<tr>
				<td>{{$sessao->idFilme}}</td>
				<td>{{$sessao->idSala}}</td>
				<td>{{$sessao->data}}</td>
				<td>{{$sessao->hora}}</td>
				<td>
					<a href="{{route('editarSessao',$sessao->id)}}" class="acao_table">Editar</a>
					<a href="{{route('verSessao',$sessao->id)}}" class="acao_table">Visualizar</a>
				</td>
			</tr>
		@endforeach
	</table>

@endsection()