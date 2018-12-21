<!doctype html>
<html lang ="fr">
	<head>
		<meta charset ="UTF -8">
		<title> @yield('titre') </title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- pour bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- pour font awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

		@yield('css', '')
		<!-- le style qui suit est pour aligner les bouton #right-side-button a droite -->
		<style>
			/*pour le bouton toggle*/
			.navbar-header{
			  width:100%;
			}
			#right-side-button{
			  float:right;
			}
			/*pour le footer*/
			html, body {
				height: 100%;
			}
			#main-container {
				min-height: 100%
				padding-bottom: 70px;
			}
			footer {
				background-color: #736699;
				position: relative;
				height: 70px;
				margin-top: -70px;
				clear: both;
			}
		</style>
	</head>
	
	<body>
		<?php
		function current_page($uri = "/") {
			return strstr(request()->path(), $uri);
		}
		?>

		<div class="container-fluid" id="main-container">
			<div class="titre-site">
				<h1>Port de Riji</h1>
			</div>
			
			<div name="menu-site">
				<!-- ici il faut voir si on est connectés ou pas pour choisir le bon header -->
				@if(Auth::guest())
					@include('includes.header1')
				@else
					@include('includes.header2')
				@endif
			</div>
		
			<div class="container-fluid" id="contenu-page">
				@yield('contenu')
			</div>
		</div>
		
		<footer class="page-footer font-small">
			@include('includes.footer')
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>