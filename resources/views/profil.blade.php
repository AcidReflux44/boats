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
        <a class="list-group-item list-group-item-action list-group-item-primary">Modifier profil</a>
        <a class="list-group-item list-group-item-action">liste bâteaux</a>
        <a class="list-group-item list-group-item-action ">liste places</a>
        <a class="list-group-item list-group-item-action">liste maintenances</a>
    </div>
@endsection

@section('contenu')
    <div class="container mt-4">
        <div class="row mb-4 p-4">
            <a role="button" href="{!! URL::route('boats.create')!!}" class="btn btn-sm btn-danger m-1"><span class="fas fa-plus"></span> Ajouter bâteau</a>
            <a role="button" href="#" class="btn btn-sm btn-warning m-1"><span class="fas fa-question"></span>Demande reservation</a>
            <a role="button" href="#" class="btn btn-sm btn-dark m-1"><span class="fas fa-wrench"></span>Ajouter maintenance</a>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img src="images/person.svg" width="200" height="200" class="img-fluid img-thumbnail rounded p-4 bg-light">
            </div>

            <div class="col-md-7">
                <div class="font-weight-bold">{{ Auth::user()->name }}</div>
                <div>{{ Auth::user()->email }}</div>
                <div>ID : {{ Auth::user()->id }}</div>
            </div>

            <div class="col-md-3 pt-3">
                @yield('droite')
            </div>
        </div>

        <?php $boats = App\Boats::all(); ?>

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
                </ul>
            </div>
        </div>
    </div>
@endsection