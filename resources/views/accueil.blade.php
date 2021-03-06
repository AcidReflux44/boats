@extends ('template')
@section ('titre', 'Accueil')
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
	<p>Bienvenue sur notre site</p>
	<div class="row" id="row">
		<div class="col">
			<img class="img-fluid" alt="Responsive image" src="/images/port1.jpg" />
		</div>
		<div class="col" id="accueil-text">
			<p>Mox dicta finierat, multitudo omnis ad, quae imperator voluit, promptior laudato consilio consensit in pacem ea ratione maxime percita, quod norat expeditionibus crebris fortunam eius in malis tantum civilibus vigilasse, cum autem bella moverentur externa, accidisse plerumque luctuosa, icto post haec foedere gentium ritu perfectaque sollemnitate imperator Mediolanum ad hiberna discessit.</p>
		</div>
	</div>
	<div class="row"  id="row">
		<div class="col" id="accueil-text">
			<p>Iamque non umbratis fallaciis res agebatur, sed qua palatium est extra muros, armatis omne circumdedit. ingressusque obscuro iam die, ablatis regiis indumentis Caesarem tunica texit et paludamento communi, eum post haec nihil passurum velut mandato principis iurandi crebritate confirmans et statim inquit exsurge et inopinum carpento privato inpositum ad Histriam duxit prope oppidum Polam, ubi quondam peremptum Constantini filium accepimus Crispum.</p>
		</div>
		<div class="col">
			<img class="img-fluid" alt="Responsive image" src="/images/port2.jpg" />
		</div>
	</div>
	<div class="row"  id="row">
		<div class="col">
			<img class="img-fluid" alt="Responsive image" src="/images/port3.jpg" />
		</div>
		<div class="col" id="accueil-text">
			<p>Illud autem non dubitatur quod cum esset aliquando virtutum omnium domicilium Roma, ingenuos advenas plerique nobilium, ut Homerici bacarum suavitate Lotophagi, humanitatis multiformibus officiis retentabant.</p>
		</div>
	</div>
</div>

@endsection