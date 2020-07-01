@extends('Sessão.TemplateSessao')

@section('viewSessao')

	@if(isset($errors) && count($errors) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach
		</div>
	@endif

	<h1 class="titulo">{{$titulo}}</h1>

	<form method="post" action="{{route('updateSessao',$sessao->id)}}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		
		<div class="form-group">
			<label for="filme">Filme:</label>
			<input type="text" name="idFilme" id="filme" class="form-control" value="{{$filme->nome}}" />
		</div>

		<div class="form-group">
			<label for="sala">Sala:</label>
			<input type="text" name="idSala" id="sala" class="form-control" value="{{$sala->nome}}"/>
		</div>

		<div class="form-group">
			<label for="data">Data:</label>
			<input data-mask="00/00/0000" type="text" name="data" id="data" class="form-control" value="{{$sessao->data}}" placeholder="Dia/Mês/Ano (ex: 01/01/2020)"/>
		</div>

		<div class="form-group">
			<label for="hora">Hora:</label><br/>
			<select class="form-control" name="hora" id="hora">
				@foreach($hora as $h)
					<option value="{{$h}}"

					 @if( $sessao->hora == $h)
					 	selected 
					 @endif

					 >{{$h}}</option>
				@endforeach
			</select>
		</div>

		<center><button class="btn btn-dark">Atualizar</button></center>
	</form>

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js'></script>
	<script>
		$(document).ready(function(){
			$('#data').mask('00/00/0000');
		})
	</script>

@endsection