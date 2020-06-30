@extends('Filme.TemplateFilme')

@section('viewFilme')

	@if(isset($errors) && count($errors) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach
		</div>
	@endif

	<h1 class="titulo">{{$titulo}}</h1>

	<form method="post" action="{{route('inserirFilme')}}">
		{!! csrf_field() !!}
		
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control"/>
		</div>

		<div class="form-group">
			<label for="autor">Autor:</label>
			<input type="text" name="autor" id="autor" class="form-control"/>
		</div>

		<div class="form-group">
			<label for="genero">Gênero:</label><br/>
			<select name="genero" id="genero">
				@foreach($genero as $g)
					<option value="{{$g}}">{{$g}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="duracao">Duração:</label>
			<input type="text" name="duracao" id="duracao" class="form-control"/>
		</div>


		<center><button class="btn btn-dark">Cadastrar</button></center>
	</form>

@endsection