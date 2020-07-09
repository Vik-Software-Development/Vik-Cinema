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

	<form method="post" action="{{route('filmes.store')}}">
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
			<select class="form-control" name="genero" id="genero">
				@foreach($genero as $g)
					<option value="{{$g}}">{{$g}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="duracao">Duração:</label>
			<input type="text" name="duracao" id="duracao" class="form-control" data-mask="00:00:00" placeholder="Hora/Minuto/Segundo (ex: 01:20:20)" />
		</div>


		<center><button class="btn btn-dark botao">Cadastrar</button></center>
	</form>

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js'></script>
	<script>
		$(document).ready(function(){
			$('#duracao').mask('00:00:00');
		})
	</script>

@endsection