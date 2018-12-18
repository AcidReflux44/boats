<nav class="navbar navbar-dark bg-dark">
  <form class="navbar-header">
	<a class="btn btn-dark {{ 
		(current_page('accueil')) ? 'active' : ''
	}} " href="http://localhost/accueil" class="nav-link">Accueil</a>
	<a class="btn btn-dark {{ 
		(current_page('lister')) ? 'active' : ''
	}} " href="http://localhost/lister" class="nav-link">Liste des places</a>
	<a class="btn btn-dark {{ 
		(current_page('plusInfo')) ? 'active' : ''
	}} " href="http://localhost/plusInfo" class="nav-link">Plus sur nous</a>
	<a class="btn btn-dark {{ 
		(current_page('contact')) ? 'active' : ''
	}} " href="http://localhost/contact" class="nav-link">Nous contacter</a>
	<button id="right-side-button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link" href="#">Se connecter <span class="sr-only">(current)</span></a>
			<a class="nav-item nav-link" href="#">S'inscrire</a>
		</div>
	</div>
  </form>
</nav>