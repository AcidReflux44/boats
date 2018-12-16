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
        <div class="row">
            <div class="col-md-2">
                <img src="images/person.svg" width="200" height="200" class="img-fluid img-thumbnail rounded p-4 bg-light">
            </div>

            <div class="col-md-7">
                <div class="font-weight-bold">Prénom Nom</div>
                <div>date de naissance</div>
                <div>email</div>
            </div>

            <div class="col-md-3 pt-3">
                @yield('droite')
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <ul class="list-group">
                    <h5 >Ma Liste de Bâteaux</h5>
                </ul>
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