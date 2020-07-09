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

	<form method="post" action="{{route('salas.update',$sala->id)}}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control" value="{{$sala->nome}}" />
		</div>

		<div class="form-group">
			<label for="quantPessoas">Quantidade de pessoas</label>
			<input type="number" name="quantPessoas" id="quantPessoas" class="form-control" value="{{$sala->quantPessoas}}" />
		</div>

		<center><button class="btn btn-dark">Atualizar</button></center>
	</form>

@endsection