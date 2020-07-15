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
		<form method="post" action="{{route('sessaos.store')}}">
			{!! csrf_field() !!}
			
			<div class="form-group">
				<label for="filme" class="label">Filme:</label>
				<input type="text" name="idFilme" id="filme" class="form-control"/>
			</div>

			<div class="form-group">
				<label for="sala" class="label">Sala:</label>
				<input type="text" name="idSala" id="sala" class="form-control"/>
			</div>

			<div class="form-group">
				<label for="data" class="label">Data:</label>
				<input type="text" name="data" id="data" class="form-control" data-mask="00/00/0000" placeholder="Dia/Mês/Ano (ex: 01/01/2020)" />
			</div>

			<div class="form-group">
				<label for="hora" class="label">Hora:</label><br/>
				<select class="form-control" name="hora" id="hora">
					@foreach($hora as $h)
						<option value="{{$h}}">{{$h}}</option>
					@endforeach
				</select>
			</div>

			<center><button class="btn btn-dark botao">Cadastrar</button></center>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js'></script>
	<script>
		$(document).ready(function(){
			$('#data').mask('00/00/0000');
		})
	</script>

@endsection