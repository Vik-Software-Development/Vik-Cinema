@extends('Template')

@section('view')

	@if(isset($errors) && count($errors) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach
		</div>
	@endif

	<center><h1 class="titulo">{{$titulo}}</h1></center>
	<div class="cadastrar_editar">
		<form method="post" action="{{route('salas.update',$sala->id)}}">
			{!! csrf_field() !!}
			{!! method_field('PUT') !!}
			
			<div class="form-group">
				<label for="nome" class="label">Nome:</label>
				<input type="text" name="nome" id="nome" class="form-control" value="{{$sala->nome}}" />
			</div>

			<div class="form-group">
				<label for="quantPessoas" class="label">Quantidade de pessoas</label>
				<input type="number" name="quantPessoas" id="quantPessoas" class="form-control" value="{{$sala->quantPessoas}}" />
			</div>

			<center><button class="btn btn-dark botao">Atualizar</button></center>
		</form>
	</div>

@endsection