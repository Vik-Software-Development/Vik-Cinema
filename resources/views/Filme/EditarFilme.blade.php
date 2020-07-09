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
		<form method="post" action="{{route('filmes.update',$filme->id)}}">
			{!! csrf_field() !!}
			{!! method_field('PUT') !!}
			
			<div class="form-group">
				<label for="nome" class="label">Nome:</label>
				<input type="text" name="nome" id="nome" class="form-control" value="{{$filme->nome}}" />
			</div>

			<div class="form-group">
				<label for="autor" class="label">Autor:</label>
				<input type="text" name="autor" id="autor" class="form-control" value="{{$filme->autor}}"/>
			</div>

			<div class="form-group">
				<label for="genero" class="label">Gênero:</label><br/>
				<select class="form-control" name="genero" id="genero">
					@foreach($genero as $g)
						<option value="{{$g}}"

						 @if( $filme->genero == $g)
						 	selected 
						 @endif

						 >{{$g}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="duracao" class="label">Duração:</label>
				<input data-mask="00:00:00" type="text" name="duracao" id="duracao" class="form-control" value="{{$filme->duracao}}" placeholder="Hora/Minuto/Segundo (ex: 01:20:20)" />
			</div>


			<center><button class="btn btn-dark botao">Atualizar</button></center>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js'></script>
	<script>
		$(document).ready(function(){
			$('#duracao').mask('00:00:00');
		})
	</script>

@endsection