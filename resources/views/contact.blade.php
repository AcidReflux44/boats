@extends("template")
@section('titre', 'Contact')

@section('css')
@endsection

@section('contenu')
    <div class="container mt-4">
		<h3>Contact</h3>
        <div class="row mt-5">
            <div class="col-md-12">
                <ul class="list-group">
                    <h5 >Adresse postale :</h5>
					<p>L'adresse du port</br>
					n° -- et rue</br>
					zip code</br>
					nom de la ville
					</p>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <ul class="list-group">
                    <h5 >Téléphone :</h5>
					<p>+33-03-03-03-03-03</p>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <ul class="list-group">
                    <h5 >Courrier :</h5>
					<p>nom-du-port@email.com</p>
                </ul>
            </div>
        </div>
    </div>
@endsection