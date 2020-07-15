<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="{{url('CSS\estilo.css')}}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<title>{{$titulo}}</title>
	</head>
	<body>
		<div class="principal">

			<div class="header">

				<header>
					<span class="logo"><svg width="120" height="120" viewBox="0 0 16 16" class="bi bi-camera-reels" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M2.667 7C2.022 7 1.5 7.522 1.5 8.167v5.666c0 .645.522 1.167 1.167 1.167h6.666c.645 0 1.167-.522 1.167-1.167V8.167C10.5 7.522 9.978 7 9.333 7H2.667zM.5 8.167C.5 6.97 1.47 6 2.667 6h6.666c1.197 0 2.167.97 2.167 2.167v5.666C11.5 15.03 10.53 16 9.333 16H2.667A2.167 2.167 0 0 1 .5 13.833V8.167z"/>
						<path fill-rule="evenodd" d="M11.25 9.15l2.768-1.605a.318.318 0 0 1 .482.263v6.384c0 .228-.26.393-.482.264l-2.767-1.605-.502.865 2.767 1.605c.859.498 1.984-.095 1.984-1.129V7.808c0-1.033-1.125-1.626-1.984-1.128L10.75 8.285l.502.865zM3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						<path fill-rule="evenodd" d="M9 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg></span>

					<h1 class="vik">Vik-Cinema</h1>
					<nav>
						<ul>
							<li><a href="{{route('/')}}">Home</a></li>
							<li><a href="{{route('sessaos.index')}}">Sessões</a></li>
							<li><a href="{{route('salas.index')}}">Salas</a></li>
							<li><a href="{{route('filmes.index')}}">Filmes</a></li>
							<li><a href="{{route('funcionarios.index')}}">Funcionários</a></li>
							<li><a href="" class="btn btn-light botao">Logar</a></li>
						</ul>	
					</nav>
				</header>

			</div>
			<br/>

			@yield('view')

			<br/>
			<div class="footer">
				<footer>
					<center><p id="nomesFooter">by Victor Matos (87 99152-5919) | Erik Matias (87 99669-1842)</p></center>
				</footer>
				
			</div>
		</div>

	</body>
</html>