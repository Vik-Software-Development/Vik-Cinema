@extends('Template')

@section('view')

	@if(isset($errors) && count($errors) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach
		</div>
	@endif

	<h1 class="titulo">{{$titulo}}</h1>

	<form method="post" action="{{route('salas.store')}}">
		{!! csrf_field() !!}
		
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control"/>
		</div>

		<div class="form-group">
			<label for="quantPessoas">Quantidade de pessoas</label>
			<input type="number" name="quantPessoas" id="quantPessoas" class="form-control"/>
		</div>

		<center><button class="btn btn-dark botao">Cadastrar</button></center>
	</form>

@endsection