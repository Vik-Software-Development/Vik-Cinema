@extends('Template')

@section('view')

	<center><h1 class="titulo">{{$titulo}}</h1></center>
	<a href="{{route('salas.create')}}" class="btn btn-dark botao_table botao">Cadastrar</a>
	<div class="listar">
		<table class="table table-dark">
			<tr>
				<th>Nome</th>
				<th>Quantidade Pessoas</th>
				<th>Ações</th>
			</tr>
			@foreach($salas as $sala)
				<tr>
					<td>{{$sala->nome}}</td>
					<td>{{$sala->quantPessoas}}</td>
					<td>
						<a href="{{route('salas.edit',$sala->id)}}" class="acao_table">
							<span class="edit_table"><svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
								<path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
							</svg></span>
						</a>

						<a href="{{route('salas.show',$sala->id)}}" class="acao_table">
							<span class="show_table"><svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-camera" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M15 12V6a1 1 0 0 0-1-1h-1.172a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 9.173 3H6.828a1 1 0 0 0-.707.293l-.828.828A3 3 0 0 1 3.172 5H2a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
								<path fill-rule="evenodd" d="M8 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/><path d="M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
							</svg></span>
						</a>
					</td>
				</tr>
			@endforeach
		</table>
	</div>
@endsection()