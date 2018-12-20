@extends("template")
@section('titre', 'Liste')
@section('css')
    <style>
		/*pour remettre le text au milieu*/
		#row {
			display: flex;
		}
        #accueil-text {
			margin: auto;
        }
    </style>
@endsection

@section('contenu')
    <div class="container mt-4">
        <div class="row">
			<div class="col" id="accueil-text">
				Notre site offre 4 emplacements de ports différent sur des sites 
				stratégiques dans cette île. Tout les ports sont équipé par des 
				emplacmecements qui peuvent accueillir des bateaux de tailles 
				différentes.</br>
				Toutes nos places bénéficient déjà des équipements nécessaires pour 
				simplifier votre instalation.</br>
			</div>
			<div class="col">
				<img class="img-fluid" alt="Responsive image" src="/images/map.png" />
			</div>
        </div>
		</br>
        <div class="row">
			<div class="col" id="accueil-text">
				Dans chaque port il y a des parties réservé pour des bateaux de certian 
				type et taille.
			</div>
        </div>
        <div class="row">
			<div class="col">
				<img class="img-fluid" alt="Responsive image" src="/images/place1.jpg" />
			</div>
			<div class="col">
				<img class="img-fluid" alt="Responsive image" src="/images/place2.jpg" />
			</div>
        </div>
		</br>
		<div class="row">
			<div class="col">
                <ul class="list-group">
                    <h5>Port 1 :</h5>
					<li>Nombre des places disponibles :</li>
					<li>Nombre des places totales :</li>
					<li>Nombre des places résidents :</li>
					<li>Nombre des places visiteurs :</li>
                </ul>
            </div>
		</div>
		</br>
		<div class="row">
			<div class="col">
                <ul class="list-group">
                    <h5>Port 2 :</h5>
					<li>Nombre des places disponibles :</li>
					<li>Nombre des places totales :</li>
					<!-- je sais pas si les deux ligne juste après servent a 
					qq chose ou pas on est pas obligé de les garder-->
					<li>Nombre des places résidents :</li>
					<li>Nombre des places visiteurs :</li>
                </ul>
            </div>
		</div>
		</br>
		<div class="row">
			<div class="col">
                <ul class="list-group">
                    <h5>Port 3 :</h5>
					<li>Nombre des places disponibles :</li>
					<li>Nombre des places totales :</li>
					<li>Nombre des places résidents :</li>
					<li>Nombre des places visiteurs :</li>
                </ul>
            </div>
		</div>
		</br>
		<div class="row">
			<div class="col">
                <ul class="list-group">
                    <h5>Port 4 :</h5>
					<li>Nombre des places disponibles :</li>
					<li>Nombre des places totales :</li>
					<li>Nombre des places résidents :</li>
					<li>Nombre des places visiteurs :</li>
                </ul>
            </div>
		</div>
		<div class="row">
		</div>
		<div class="row">
		</div>
		<div class="row">
		</div>
    </div>
@endsection