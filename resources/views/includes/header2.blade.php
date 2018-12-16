<nav class="navbar navbar-dark bg-dark">
  <form class="navbar-header">
	<a class="btn btn-dark {{ 
		(Request::url()=="http://localhost/accueil") ? 'active' : ''
	}} " href="http://localhost/accueil" class="nav-link">Accueil</a>
	<a class="btn btn-dark {{ 
		(Request::url()=="http://localhost/lister") ? 'active' : ''
	}} " href="http://localhost/lister" class="nav-link">Liste des places</a>
	<a class="btn btn-dark {{ 
		(Request::url()=="http://localhost/plusInfo") ? 'active' : ''
	}} " href="http://localhost/plusInfo" class="nav-link">Plus sur nous</a>
	<a class="btn btn-dark {{ 
		(Request::url()=="http://localhost/contacter") ? 'active' : ''
	}} " href="http://localhost/contacter" class="nav-link">Nous contacter</a>
	<button id="right-side-button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a id="right-side-button" class="btn btn-danger {{ 
		(Request::url()=="http://localhost/deconnexion") ? 'active' : ''
	}} " href="#" class="nav-link">Deconnexion</a>
	
	
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link" href="http://localhost/profil">Profile</a>
			<a class="nav-item nav-link" href="http://localhost/profil">Mes bâteaux</a>
			<a class="nav-item nav-link" href="http://localhost/profil">Mes places</a>
		</div>
	</div>
  </form>
</nav>