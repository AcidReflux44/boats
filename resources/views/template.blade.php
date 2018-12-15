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
	</head> 
	
	<body>
		<div class="titre-site">
			<h1>Nom du port</h1>
		</div>
		<div name="menu-site">
			<!-- marche pas -->
			<!-- <ul class="nav navbar-nav masthead-nav navbar-left">
				<li {{	(Request::url()=="http://localhost/facture/1") ? 'class=active' : '' }}>
					<a href="http://localhost/facture/1">Facture1</a>
				</li>
				<li {{	(Request::url()=="http://localhost/facture/2") ? 'class=active' : '' }}>
					<a href="http://localhost/facture/2">Facture2</a>
				</li>
				<li {{	(Request::url()=="http://localhost/facture/3") ? 'class=active' : '' }}>
					<a href="http://localhost/facture/3">Facture3</a>
				</li>
			</ul> -->
			
			<!-- modèle 1 -->
			<nav class="navbar navbar-dark bg-dark">
			  <form class="form-inline">
				<a class="btn btn-dark {{ 
					(Request::url()=="http://localhost/accueil") ? 'active' : ''
				}} " type="button" href="http://localhost/accueil" class="nav-link">Accueil</a>
				<a class="btn btn-dark {{ 
					(Request::url()=="http://localhost/facture/1") ? 'active' : ''
				}} " type="button" href="http://localhost/facture/1" class="nav-link">Facture1</a>
				<a class="btn btn-dark {{ 
					(Request::url()=="http://localhost/facture/2") ? 'active' : ''
				}} " type="button" href="http://localhost/facture/2" class="nav-link">Facture2</a>
				<a class="btn btn-dark {{ 
					(Request::url()=="http://localhost/facture/3") ? 'active' : ''
				}} " type="button" href="http://localhost/facture/3" class="nav-link">Facture3</a>
			  </form>
			</nav>
			
			<!-- modèle 2
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="btn btn-dark {{ 
					(Request::url()=="http://localhost/accueil") ? 'active' : ''
				}} " type="button" href="http://localhost/accueil" class="nav-link">Accueil</a>
				<a class="btn btn-dark {{ 
					(Request::url()=="http://localhost/facture/1") ? 'active' : ''
				}} " type="button" href="http://localhost/facture/1" class="nav-link">Facture1</a>
				<a class="btn btn-dark {{ 
					(Request::url()=="http://localhost/facture/2") ? 'active' : ''
				}} " type="button" href="http://localhost/facture/2" class="nav-link">Facture2</a>
				<a class="btn btn-dark {{ 
					(Request::url()=="http://localhost/facture/3") ? 'active' : ''
				}} " type="button" href="http://localhost/facture/3" class="nav-link">Facture3</a>
				
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link" href="#">Se connecter <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link" href="#">S'inscrire</a>
						<a class="nav-item nav-link" href="#">Profil</a>
						<a class="nav-item nav-link disabled" href="#">Disabled</a>
					</div>
				</div>
			</nav>
			
			<!-- modèle 3
			<nav class="navbar navbar-dark bg-dark">
			  <form class="form-inline">
				<button class="btn btn-outline-light {{ 
					(Request::url()=="http://localhost/accueil") ? 'active' : ''
				}} " type="button"><a href="http://localhost/accueil" class="btn">Accueil</a></button>
				<button class="btn btn-outline-light {{ 
					(Request::url()=="http://localhost/facture/1") ? 'active' : ''
				}} " type="button"><a href="http://localhost/facture/1" class="btn">Facture1</a></button>
				<button class="btn btn-outline-light {{ 
					(Request::url()=="http://localhost/facture/2") ? 'active' : ''
				}} " type="button"><a href="http://localhost/facture/2" class="btn">Facture2</a></button>
				<button class="btn btn-outline-light {{ 
					(Request::url()=="http://localhost/facture/3") ? 'active' : ''
				}} " type="button"><a href="http://localhost/facture/3" class="btn">Facture3</a></button>
			  </form>
			</nav> -->
		</div>
		<div class="contenu-page">
			@yield('contenu')
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>