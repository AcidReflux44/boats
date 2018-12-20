@extends ('template')
@section ('titre', 'Plus sur nous')
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

@section ('contenu')
<div class="wrapper">
	<div class="row" id="row">
		<div class="col" id="accueil-text">
			<h3>Historique</h3>
			<p>Le Port Riji tourisme à été initié en Décembre 2017. Notre principale 
			objectif est de permettre à l'île de se positionner en tant que destination 
			phare du tourisme de croisière et de plaisance à l'échelle internationnale.
			</p>
		</div>
	</div>
	</br>
	<div class="row"  id="row">
		<div class="col" id="accueil-text">
			<p>Sur un si petit territoire, au milieu des eaux, l'île Riji possède 
			une nature exeptionnelle pour sa diversité des paysages et sa richesse
			de la flore.
			Donc notre port va permettre aux touristes de profiter d'une nouvelle 
			destination très enrichissante et relaxante.
			</p>
		</div>
	</div>
	</br>
	<div class="row"  id="row">
		<div class="col">
			<img class="img-fluid" alt="Responsive image" src="/images/ile1.jpg" />
			</div>
	</div>
</div>

@endsection