@extends("template")
@section('titre', 'Profil')
@section('css')
    <style>
        #menu-profil {
            font-size: 0.9em;
            line-height: 0.6em;
        }
    </style>
@endsection
@section('droite')
    <div class="list-group" id="menu-profil">
        <a href="edit-profil" class="list-group-item list-group-item-action">Modifier profil</a>
        <a class="list-group-item list-group-item-action">liste bâteaux</a>
        <a class="list-group-item list-group-item-action ">liste places</a>
        <a class="list-group-item list-group-item-action">liste maintenances</a>
    </div>
@endsection

@section('contenu')
    <div class="container mt-4">
        <div class="row mb-4 p-4">
            <div class="col p-0">
                <a role="button" href="{!! URL::route('boats.create')!!}" class="btn btn-sm btn-danger m-1"><span class="fas fa-plus"></span> Ajouter bâteau</a>
                <a role="button" href="{!! URL::route('reservations.create') !!}" class="btn btn-sm btn-warning m-1"><span class="fas fa-question"></span> Demande reservation</a>
                <a role="button" href="{!! URL::route('maintenances.create') !!}" class="btn btn-sm btn-dark m-1"><span class="fas fa-wrench"></span> Ajouter maintenance</a>
                <a href="/reservations-en-attente">Réservations en attente</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img src="images/person.svg" width="200" height="200" class="img-fluid img-thumbnail rounded p-4 bg-light">
            </div>

            <div class="col-md-7">
                @if(!empty($edit))
                    {!! Form::open(['url' => 'save-profil', 'class' => 'form']) !!}
                    <div class="form-group w-50">
                        {!! Form::text('name', Auth::user()->name, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
                    </div>
                    <div class="form-group w-50">
                        {!! Form::email('email', Auth::user()->email, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
					<div ="form-group">
						<a class="btn btn-info" href="/changePassword">Changer le mot de passe</a>
					</div>
                @else
                    <div class="font-weight-bold">{{ Auth::user()->name }}</div>
                    <div>{{ Auth::user()->email }}</div>
                    <div>ID : {{ Auth::user()->id }}</div>
                @endif
            </div>

            <div class="col-md-3 pt-3">
                @yield('droite')
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h5 >Ma Liste de Bâteaux</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Modèle</th>
                            <th scope="col">Longueur</th>
                            <th>Largeur</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($boats as $boat)
                            <tr scope="row">
                                <td>{{ $boat->id }}</td>
                                <td><a href="{!! URL::route('boats.show', $boat) !!}">{{ $boat->nom }}</a></td>
                                <td>{{ $boat->modele }}</td>
                                <td>{{ $boat->longueur }}</td>
                                <td>{{ $boat->largeur }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <ul class="list-group">
                    <h5>Ma Liste de Places</h5>
                    <?php
                    use App\Boat;
                    use App\Place;?>
                </ul>
            </div>
        </div>
    </div>
@endsection