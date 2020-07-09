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
		<form method="post" action="{{route('salas.store')}}">
			{!! csrf_field() !!}
			
			<div class="form-group">
				<label for="nome" class="label">Nome:</label>
				<input type="text" name="nome" id="nome" class="form-control"/>
			</div>

			<div class="form-group">
				<label for="quantPessoas" class="label">Quantidade de pessoas</label>
				<input type="number" name="quantPessoas" id="quantPessoas" class="form-control"/>
			</div>

			<center><button class="btn btn-dark botao">Cadastrar</button></center>
		</form>
	</div>

@endsection